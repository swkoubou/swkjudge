<?php
class Controller_Submit extends Controller_Template
{

	public function action_index()
	{
		$data['submits'] = Model_Submit::find('all');
		$this->template->title = "Submits";
		$this->template->content = View::forge('submit/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('submit');

		if ( ! $data['submit'] = Model_Submit::find($id))
		{
			Session::set_flash('error', 'Could not find submit #'.$id);
			Response::redirect('submit');
		}

		$this->template->title = "Submit";
		$this->template->content = View::forge('submit/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Submit::validate('create');

			if ($val->run())
			{
				$submit = Model_Submit::forge(array(
					'username' => Input::post('username'),
					'problemid' => Input::post('problemid'),
					'contestid' => Input::post('contestid'),
					'score' => Input::post('score'),
					'lang' => Input::post('lang'),
					'time' => Input::post('time'),
					'result' => Input::post('result'),
					'view' => Input::post('view'),
				));

				if ($submit and $submit->save())
				{
					Session::set_flash('success', 'Added submit #'.$submit->id.'.');

					Response::redirect('submit');
				}

				else
				{
					Session::set_flash('error', 'Could not save submit.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Submits";
		$this->template->content = View::forge('submit/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('submit');

		if ( ! $submit = Model_Submit::find($id))
		{
			Session::set_flash('error', 'Could not find submit #'.$id);
			Response::redirect('submit');
		}

		$val = Model_Submit::validate('edit');

		if ($val->run())
		{
			$submit->username = Input::post('username');
			$submit->problemid = Input::post('problemid');
			$submit->contestid = Input::post('contestid');
			$submit->score = Input::post('score');
			$submit->lang = Input::post('lang');
			$submit->time = Input::post('time');
			$submit->result = Input::post('result');
			$submit->view = Input::post('view');

			if ($submit->save())
			{
				Session::set_flash('success', 'Updated submit #' . $id);

				Response::redirect('submit');
			}

			else
			{
				Session::set_flash('error', 'Could not update submit #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$submit->username = $val->validated('username');
				$submit->problemid = $val->validated('problemid');
				$submit->contestid = $val->validated('contestid');
				$submit->score = $val->validated('score');
				$submit->lang = $val->validated('lang');
				$submit->time = $val->validated('time');
				$submit->result = $val->validated('result');
				$submit->view = $val->validated('view');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('submit', $submit, false);
		}

		$this->template->title = "Submits";
		$this->template->content = View::forge('submit/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('submit');

		if ($submit = Model_Submit::find($id))
		{
			$submit->delete();

			Session::set_flash('success', 'Deleted submit #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete submit #'.$id);
		}

		Response::redirect('submit');

	}

}
