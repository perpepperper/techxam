@extends('layouts.app')

@section('content')
	
	    <div class="panel-body">
        <!-- Display Validation Errors -->


        <!-- New Task Form -->
        <form action="{{ url('group') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Group Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Group Task
                    </button>
                </div>
            </div>
        </form>
    </div>

        <!-- TODO: Current Tasks -->
        @if (count($tasks) > 0)
        @foreach ($tasks as $task)

        <div class="panel panel-default center-block" style="width: 30%">
            <div class="panel-heading">
                <tr>
                    <td>{{ $task->name }}</td>
                    

                    <td>
                        <form action="{{ url('task/'.$task->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" id="delete-task-{{ $task->id }}" class="close">
                                <i class="fa fa-btn fa-trash"></i>X
                            </button>
                        </form>
                    </td>
                </tr>
               
            </div>

            </div>
        @endforeach
    @endif  

    



@endsection