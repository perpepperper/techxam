@extends('layouts.app')


@section('title','Task')

@section('content')


        <div class="panel-body">


        @include('errors')

        <form action="{{ url('group') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}


            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Group Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Group Task
                    </button>
                </div>
            </div>
        </form>
    </div>

        @if (count($tasks) > 0)
        @foreach ($tasks as $task)
            <div class="panel panel-default center-block panel-contain" style="width: 40%;">
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



                <div>
                    <div class="panel-body">

                        <table class="table table-hover task-table" title="{{ $task->name }}">

                            <tbody>
                                @foreach($task->list as $subtask)
                                <tr>

                                    <td><input type="checkbox" name="">{{$subtask->name}}</td>
                                </tr>
                                @endforeach
                            </tbody>


                        </table>
                        <button style="float: right" class="btn btn-default add" data-toggle="modal" value="{{ $task->id }}"> Add Task
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    <div class="modal fade" id="addModal" role="dialog">
  <div class="modal-dialog">
  
    <!-- Modal content-->
    <form id="addForm" method="post" action="{{ url('task') }}">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Task</h4>
      </div>
      <div class="modal-body">
      <div class="text-warning">Fields with asterisk (*) are required.</div>
        {{ csrf_field() }}


        <div class="form-group required" id="name">
          <label for="name" class="control-label">Name:</label>
          <input type="text" class="form-control" id="name" name="name" maxlength="100">
        </div>
        <div class="form-group required" id="id">


          <input type="hidden" class="form-control" id="tlist" name="id" maxlength="100">
        </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-default" placeholder="">Submit</button>
      </div>
    </div>
    </form>
    
  </div>
</div>

@endsection

@section('js')
<script type="text/javascript">


//  $(".add").click(function() {
//     alert("click");
// });
//  $(document).on('click','#jose',function(){
//     var product_id = $(this).val();

//     console.log("tite")

$(document).ready(function() {

    $(document).on("click",".add",function() {
        var id = $(this).val();
        $('#tlist').val(id);
        $('#addModal').modal('show');
    });

    
});
</script>
@endsection