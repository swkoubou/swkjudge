<?php
class Controller_Writer extends Controller_Template
{

	public function action_index()
	{
		$data['writers'] = Model_Writer::find('all');
		$this->template->title = "Writers";
		$this->template->content = View::forge('writer/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('writer');

		if ( ! $data['writer'] = Model_Writer::find($id))
		{
			Session::set_flash('error', 'Could not find writer #'.$id);
			Response::redirect('writer');
		}

		$this->template->title = "Writer";
		$this->template->content = View::forge('writer/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Writer::validate('create');

			if ($val->run())
			{
				$writer = Model_Writer::forge(array(
					'problemid' => Input::post('problemid'),
					'username' => Input::post('username'),
				));

				if ($writer and $writer->save())
				{
					Session::set_flash('success', 'Added writer #'.$writer->id.'.');

					Response::redirect('writer');
				}

				else
				{
					Session::set_flash('error', 'Could not save writer.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Writers";
		$this->template->content = View::forge('writer/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('writer');

		if ( ! $writer = Model_Writer::find($id))
		{
			Session::set_flash('error', 'Could not find writer #'.$id);
			Response::redirect('writer');
		}

		$val = Model_Writer::validate('edit');

		if ($val->run())
		{
			$writer->problemid = Input::post('problemid');
			$writer->username = Input::post('username');

			if ($writer->save())
			{
				Session::set_flash('success', 'Updated writer #' . $id);

				Response::redirect('writer');
			}

			else
			{
				Session::set_flash('error', 'Could not update writer #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$writer->problemid = $val->validated('problemid');
				$writer->username = $val->validated('username');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('writer', $writer, false);
		}

		$this->template->title = "Writers";
		$this->template->content = View::forge('writer/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('writer');

		if ($writer = Model_Writer::find($id))
		{
			$writer->delete();

			Session::set_flash('success', 'Deleted writer #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete writer #'.$id);
		}

		Response::redirect('writer');

	}

}
