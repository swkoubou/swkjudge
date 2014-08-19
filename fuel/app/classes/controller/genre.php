<?php
class Controller_Genre extends Controller_Template
{

	public function action_index()
	{
		$data['genres'] = Model_Genre::find('all');
		$this->template->title = "Genres";
		$this->template->content = View::forge('genre/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('genre');

		if ( ! $data['genre'] = Model_Genre::find($id))
		{
			Session::set_flash('error', 'Could not find genre #'.$id);
			Response::redirect('genre');
		}

		$this->template->title = "Genre";
		$this->template->content = View::forge('genre/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Genre::validate('create');

			if ($val->run())
			{
				$genre = Model_Genre::forge(array(
					'name' => Input::post('name'),
				));

				if ($genre and $genre->save())
				{
					Session::set_flash('success', 'Added genre #'.$genre->id.'.');

					Response::redirect('genre');
				}

				else
				{
					Session::set_flash('error', 'Could not save genre.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Genres";
		$this->template->content = View::forge('genre/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('genre');

		if ( ! $genre = Model_Genre::find($id))
		{
			Session::set_flash('error', 'Could not find genre #'.$id);
			Response::redirect('genre');
		}

		$val = Model_Genre::validate('edit');

		if ($val->run())
		{
			$genre->name = Input::post('name');

			if ($genre->save())
			{
				Session::set_flash('success', 'Updated genre #' . $id);

				Response::redirect('genre');
			}

			else
			{
				Session::set_flash('error', 'Could not update genre #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$genre->name = $val->validated('name');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('genre', $genre, false);
		}

		$this->template->title = "Genres";
		$this->template->content = View::forge('genre/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('genre');

		if ($genre = Model_Genre::find($id))
		{
			$genre->delete();

			Session::set_flash('success', 'Deleted genre #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete genre #'.$id);
		}

		Response::redirect('genre');

	}

}
