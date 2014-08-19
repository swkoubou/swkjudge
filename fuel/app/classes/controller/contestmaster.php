<?php
class Controller_Contestmaster extends Controller_Template
{

	public function action_index()
	{
		$data['contestmasters'] = Model_Contestmaster::find('all');
		$this->template->title = "Contestmasters";
		$this->template->content = View::forge('contestmaster/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('contestmaster');

		if ( ! $data['contestmaster'] = Model_Contestmaster::find($id))
		{
			Session::set_flash('error', 'Could not find contestmaster #'.$id);
			Response::redirect('contestmaster');
		}

		$this->template->title = "Contestmaster";
		$this->template->content = View::forge('contestmaster/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Contestmaster::validate('create');

			if ($val->run())
			{
				$contestmaster = Model_Contestmaster::forge(array(
					'contestid' => Input::post('contestid'),
					'username' => Input::post('username'),
				));

				if ($contestmaster and $contestmaster->save())
				{
					Session::set_flash('success', 'Added contestmaster #'.$contestmaster->id.'.');

					Response::redirect('contestmaster');
				}

				else
				{
					Session::set_flash('error', 'Could not save contestmaster.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Contestmasters";
		$this->template->content = View::forge('contestmaster/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('contestmaster');

		if ( ! $contestmaster = Model_Contestmaster::find($id))
		{
			Session::set_flash('error', 'Could not find contestmaster #'.$id);
			Response::redirect('contestmaster');
		}

		$val = Model_Contestmaster::validate('edit');

		if ($val->run())
		{
			$contestmaster->contestid = Input::post('contestid');
			$contestmaster->username = Input::post('username');

			if ($contestmaster->save())
			{
				Session::set_flash('success', 'Updated contestmaster #' . $id);

				Response::redirect('contestmaster');
			}

			else
			{
				Session::set_flash('error', 'Could not update contestmaster #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$contestmaster->contestid = $val->validated('contestid');
				$contestmaster->username = $val->validated('username');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('contestmaster', $contestmaster, false);
		}

		$this->template->title = "Contestmasters";
		$this->template->content = View::forge('contestmaster/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('contestmaster');

		if ($contestmaster = Model_Contestmaster::find($id))
		{
			$contestmaster->delete();

			Session::set_flash('success', 'Deleted contestmaster #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete contestmaster #'.$id);
		}

		Response::redirect('contestmaster');

	}

}
