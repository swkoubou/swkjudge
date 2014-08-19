<?php
class Controller_Tester extends Controller_Template
{

	public function action_index()
	{
		$data['testers'] = Model_Tester::find('all');
		$this->template->title = "Testers";
		$this->template->content = View::forge('tester/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('tester');

		if ( ! $data['tester'] = Model_Tester::find($id))
		{
			Session::set_flash('error', 'Could not find tester #'.$id);
			Response::redirect('tester');
		}

		$this->template->title = "Tester";
		$this->template->content = View::forge('tester/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Tester::validate('create');

			if ($val->run())
			{
				$tester = Model_Tester::forge(array(
					'problemid' => Input::post('problemid'),
					'username' => Input::post('username'),
				));

				if ($tester and $tester->save())
				{
					Session::set_flash('success', 'Added tester #'.$tester->id.'.');

					Response::redirect('tester');
				}

				else
				{
					Session::set_flash('error', 'Could not save tester.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Testers";
		$this->template->content = View::forge('tester/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('tester');

		if ( ! $tester = Model_Tester::find($id))
		{
			Session::set_flash('error', 'Could not find tester #'.$id);
			Response::redirect('tester');
		}

		$val = Model_Tester::validate('edit');

		if ($val->run())
		{
			$tester->problemid = Input::post('problemid');
			$tester->username = Input::post('username');

			if ($tester->save())
			{
				Session::set_flash('success', 'Updated tester #' . $id);

				Response::redirect('tester');
			}

			else
			{
				Session::set_flash('error', 'Could not update tester #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$tester->problemid = $val->validated('problemid');
				$tester->username = $val->validated('username');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('tester', $tester, false);
		}

		$this->template->title = "Testers";
		$this->template->content = View::forge('tester/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('tester');

		if ($tester = Model_Tester::find($id))
		{
			$tester->delete();

			Session::set_flash('success', 'Deleted tester #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete tester #'.$id);
		}

		Response::redirect('tester');

	}

}
