<?php
class Controller_Contestuser extends Controller_Template
{

	public function action_index()
	{
		$data['contestusers'] = Model_Contestuser::find('all');
		$this->template->title = "Contestusers";
		$this->template->content = View::forge('contestuser/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('contestuser');

		if ( ! $data['contestuser'] = Model_Contestuser::find($id))
		{
			Session::set_flash('error', 'Could not find contestuser #'.$id);
			Response::redirect('contestuser');
		}

		$this->template->title = "Contestuser";
		$this->template->content = View::forge('contestuser/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Contestuser::validate('create');

			if ($val->run())
			{
				$contestuser = Model_Contestuser::forge(array(
					'contestid' => Input::post('contestid'),
					'username' => Input::post('username'),
				));

				if ($contestuser and $contestuser->save())
				{
					Session::set_flash('success', 'Added contestuser #'.$contestuser->id.'.');

					Response::redirect('contestuser');
				}

				else
				{
					Session::set_flash('error', 'Could not save contestuser.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Contestusers";
		$this->template->content = View::forge('contestuser/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('contestuser');

		if ( ! $contestuser = Model_Contestuser::find($id))
		{
			Session::set_flash('error', 'Could not find contestuser #'.$id);
			Response::redirect('contestuser');
		}

		$val = Model_Contestuser::validate('edit');

		if ($val->run())
		{
			$contestuser->contestid = Input::post('contestid');
			$contestuser->username = Input::post('username');

			if ($contestuser->save())
			{
				Session::set_flash('success', 'Updated contestuser #' . $id);

				Response::redirect('contestuser');
			}

			else
			{
				Session::set_flash('error', 'Could not update contestuser #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$contestuser->contestid = $val->validated('contestid');
				$contestuser->username = $val->validated('username');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('contestuser', $contestuser, false);
		}

		$this->template->title = "Contestusers";
		$this->template->content = View::forge('contestuser/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('contestuser');

		if ($contestuser = Model_Contestuser::find($id))
		{
			$contestuser->delete();

			Session::set_flash('success', 'Deleted contestuser #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete contestuser #'.$id);
		}

		Response::redirect('contestuser');

	}

}
