<?php
class Controller_Contest extends Controller_Template
{

	public function action_index()
	{
		$data['contests'] = Model_Contest::find('all');
		$this->template->title = "Contests";
		$this->template->content = View::forge('contest/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('contest');

		if ( ! $data['contest'] = Model_Contest::find($id))
		{
			Session::set_flash('error', 'Could not find contest #'.$id);
			Response::redirect('contest');
		}

		$this->template->title = "Contest";
		$this->template->content = View::forge('contest/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Contest::validate('create');

			if ($val->run())
			{
				$contest = Model_Contest::forge(array(
					'name' => Input::post('name'),
					'start' => Input::post('start'),
					'end' => Input::post('end'),
					'notice' => Input::post('notice'),
					'type' => Input::post('type'),
				));

				if ($contest and $contest->save())
				{
					Session::set_flash('success', 'Added contest #'.$contest->id.'.');

					Response::redirect('contest');
				}

				else
				{
					Session::set_flash('error', 'Could not save contest.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Contests";
		$this->template->content = View::forge('contest/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('contest');

		if ( ! $contest = Model_Contest::find($id))
		{
			Session::set_flash('error', 'Could not find contest #'.$id);
			Response::redirect('contest');
		}

		$val = Model_Contest::validate('edit');

		if ($val->run())
		{
			$contest->name = Input::post('name');
			$contest->start = Input::post('start');
			$contest->end = Input::post('end');
			$contest->notice = Input::post('notice');
			$contest->type = Input::post('type');

			if ($contest->save())
			{
				Session::set_flash('success', 'Updated contest #' . $id);

				Response::redirect('contest');
			}

			else
			{
				Session::set_flash('error', 'Could not update contest #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$contest->name = $val->validated('name');
				$contest->start = $val->validated('start');
				$contest->end = $val->validated('end');
				$contest->notice = $val->validated('notice');
				$contest->type = $val->validated('type');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('contest', $contest, false);
		}

		$this->template->title = "Contests";
		$this->template->content = View::forge('contest/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('contest');

		if ($contest = Model_Contest::find($id))
		{
			$contest->delete();

			Session::set_flash('success', 'Deleted contest #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete contest #'.$id);
		}

		Response::redirect('contest');

	}

}
