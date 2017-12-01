
@if($show == 1 && $edit == 1 && $delete == 1)
    <a onclick="showForm({{ $id }})" class="btn btn-info btn-xs"><i class='glyphicon glyphicon-eye-open'></i> Show</a>
    <a onclick="editForm({{ $id }})"   class="btn btn-default btn-xs"><i class='glyphicon glyphicon-edit'></i> Edit</a>
    <a onclick="archiveFunction({{ $id }})" href="{{url('jenis-recorder/'.$id.'/deleted')}}" class="btn btn-danger btn-xs"><i class='glyphicon glyphicon-trash'></i> Delete</a>

@elseif($show == 0 && $edit == 1 && $delete == 1)
    <a href="{{url('jenis_recorder/'.$id)}}" class="btn btn-primary btn-xs"><i class='glyphicon glyphicon-edit'></i> Edit</a>
    <a href="{{url('jenis_recorder/'.$id.'/deleted')}}" class="btn btn-danger btn-xs"><i class='glyphicon glyphicon-trash'></i> Delete</a>

@elseif($show == 1 && $edit == 0 && $delete == 1)
    <a onclick="showForm({{ $id }})" class="btn btn-info btn-xs"><i class='glyphicon glyphicon-eye-open'></i> Show</a>
    <a href="{{url('jenis_recorder/'.$id.'/deleted')}}" class="btn btn-danger btn-xs"><i class='glyphicon glyphicon-trash'></i> Delete</a>

@elseif($show == 1 && $edit == 1 && $delete == 0)
    <a onclick="showForm({{ $id }})" class="btn btn-info btn-xs"><i class='glyphicon glyphicon-eye-open'></i> Show</a>
    <a href="{{url('jenis_recorder/'.$id)}}" class="btn btn-primary btn-xs"><i class='glyphicon glyphicon-edit'></i> Edit</a>

@elseif($show == 1 && $edit == 0 && $delete == 0)
    <a onclick="showForm({{ $id }})" class="btn btn-info btn-xs"><i class='glyphicon glyphicon-eye-open'></i> Show</a>

@elseif($show == 0 && $edit == 1 && $delete == 0)
    <a href="{{url('jenis_recorder/'.$id)}}" class="btn btn-primary btn-xs"><i class='glyphicon glyphicon-edit'></i> Edit</a>

@elseif($show == 0 && $edit == 0 && $delete == 1)
    <a href="{{url('jenis_recorder/'.$id.'/deleted')}}" class="btn btn-danger btn-xs"><i class='glyphicon glyphicon-trash'></i> Delete</a>
@endif