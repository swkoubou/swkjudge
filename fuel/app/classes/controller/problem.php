<?php
class Controller_Problem extends Controller_Template
{

	public function action_index()
	{
		$data['problems'] = Model_Problem::find('all');
		$this->template->title = "Problems";
		$this->template->content = View::forge('problem/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('problem');

		if ( ! $data['problem'] = Model_Problem::find($id))
		{
			Session::set_flash('error', 'Could not find problem #'.$id);
			Response::redirect('problem');
		}

		$this->template->title = "Problem";
		$this->template->content = View::forge('problem/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Problem::validate('create');

			if ($val->run())
			{
				$problem = Model_Problem::forge(array(
					'name' => Input::post('name'),
					'subname' => Input::post('subname'),
					'statement' => Input::post('statement'),
					'constrains' => Input::post('constrains'),
					'inputtext' => Input::post('inputtext'),
					'input' => Input::post('input'),
					'output' => Input::post('output'),
					'examples' => Input::post('examples'),
					'view' => Input::post('view'),
					'genre' => Input::post('genre'),
				));

				if ($problem and $problem->save())
				{
					Session::set_flash('success', 'Added problem #'.$problem->id.'.');

					Response::redirect('problem');
				}

				else
				{
					Session::set_flash('error', 'Could not save problem.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Problems";
		$this->template->content = View::forge('problem/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('problem');

		if ( ! $problem = Model_Problem::find($id))
		{
			Session::set_flash('error', 'Could not find problem #'.$id);
			Response::redirect('problem');
		}

		$val = Model_Problem::validate('edit');

		if ($val->run())
		{
			$problem->name = Input::post('name');
			$problem->subname = Input::post('subname');
			$problem->statement = Input::post('statement');
			$problem->constrains = Input::post('constrains');
			$problem->inputtext = Input::post('inputtext');
			$problem->input = Input::post('input');
			$problem->output = Input::post('output');
			$problem->examples = Input::post('examples');
			$problem->view = Input::post('view');
			$problem->genre = Input::post('genre');

			if ($problem->save())
			{
				Session::set_flash('success', 'Updated problem #' . $id);

				Response::redirect('problem');
			}

			else
			{
				Session::set_flash('error', 'Could not update problem #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$problem->name = $val->validated('name');
				$problem->subname = $val->validated('subname');
				$problem->statement = $val->validated('statement');
				$problem->constrains = $val->validated('constrains');
				$problem->inputtext = $val->validated('inputtext');
				$problem->input = $val->validated('input');
				$problem->output = $val->validated('output');
				$problem->examples = $val->validated('examples');
				$problem->view = $val->validated('view');
				$problem->genre = $val->validated('genre');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('problem', $problem, false);
		}

		$this->template->title = "Problems";
		$this->template->content = View::forge('problem/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('problem');

		if ($problem = Model_Problem::find($id))
		{
			$problem->delete();

			Session::set_flash('success', 'Deleted problem #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete problem #'.$id);
		}

		Response::redirect('problem');

	}

}
