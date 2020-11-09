<div class="modal-body">
    <form method="post" action="{{ route('admin_inbox_update_url', $data->id)}}">
        {{ csrf_field() }}
        {{ method_field('put') }}
{{--        <input type="hidden" name="_method" value="PUT" />--}}
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{$data->name}}">
        </div>
        <div class="form-group">
            <label> Phone</label>
            <input type="integer" class="form-control" name="phone" value="{{$data->phone}}">

        </div>
        <div class="form-group">
            <label>Message</label>
            <input type="text" class="form-control" name="message" value="{{$data->message}}">
        </div>

        <div class="form-group">
            <button class="btn btn-success" type="submit" >Add</button>
        </div>
    </form>
</div>
