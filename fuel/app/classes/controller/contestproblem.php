<?php
class Controller_Contestproblem extends Controller_Template
{

	public function action_index()
	{
		$data['contestproblems'] = Model_Contestproblem::find('all');
		$this->template->title = "Contestproblems";
		$this->template->content = View::forge('contestproblem/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('contestproblem');

		if ( ! $data['contestproblem'] = Model_Contestproblem::find($id))
		{
			Session::set_flash('error', 'Could not find contestproblem #'.$id);
			Response::redirect('contestproblem');
		}

		$this->template->title = "Contestproblem";
		$this->template->content = View::forge('contestproblem/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Contestproblem::validate('create');

			if ($val->run())
			{
				$contestproblem = Model_Contestproblem::forge(array(
					'contestid' => Input::post('contestid'),
					'rate' => Input::post('rate'),
					'problemid' => Input::post('problemid'),
					'score' => Input::post('score'),
				));

				if ($contestproblem and $contestproblem->save())
				{
					Session::set_flash('success', 'Added contestproblem #'.$contestproblem->id.'.');

					Response::redirect('contestproblem');
				}

				else
				{
					Session::set_flash('error', 'Could not save contestproblem.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Contestproblems";
		$this->template->content = View::forge('contestproblem/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('contestproblem');

		if ( ! $contestproblem = Model_Contestproblem::find($id))
		{
			Session::set_flash('error', 'Could not find contestproblem #'.$id);
			Response::redirect('contestproblem');
		}

		$val = Model_Contestproblem::validate('edit');

		if ($val->run())
		{
			$contestproblem->contestid = Input::post('contestid');
			$contestproblem->rate = Input::post('rate');
			$contestproblem->problemid = Input::post('problemid');
			$contestproblem->score = Input::post('score');

			if ($contestproblem->save())
			{
				Session::set_flash('success', 'Updated contestproblem #' . $id);

				Response::redirect('contestproblem');
			}

			else
			{
				Session::set_flash('error', 'Could not update contestproblem #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$contestproblem->contestid = $val->validated('contestid');
				$contestproblem->rate = $val->validated('rate');
				$contestproblem->problemid = $val->validated('problemid');
				$contestproblem->score = $val->validated('score');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('contestproblem', $contestproblem, false);
		}

		$this->template->title = "Contestproblems";
		$this->template->content = View::forge('contestproblem/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('contestproblem');

		if ($contestproblem = Model_Contestproblem::find($id))
		{
			$contestproblem->delete();

			Session::set_flash('success', 'Deleted contestproblem #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete contestproblem #'.$id);
		}

		Response::redirect('contestproblem');

	}

}
