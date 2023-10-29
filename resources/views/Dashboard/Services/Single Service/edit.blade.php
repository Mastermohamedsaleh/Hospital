<!-- Modal -->
<div class="modal fade" id="edit{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">edit_Service</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Service.update', 'test') }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <label for="name">name</label>
                    <input type="text" name="name" id="name" value="{{$service->name}}" class="form-control"><br>

                    <input type="hidden" name="id" value="{{$service->id}}" class="form-control"><br>

                    <label for="price">price</label>
                    <input type="number" name="price" id="price" value="{{$service->price}}" class="form-control"><br>

                    <label for="description">description</label>
                    <textarea class="form-control" name="description" id="description" rows="5">{{$service->description}}</textarea>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="{{$service->status}}" selected>{{$service->status == 1 ? 'Enabled':'Not_enabled'}}</option>
                            <option value="1">Enabled</option>
                            <option value="0">Not_enabled</option>
                        </select>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">submit</button>
                </div>
            </form>
        </div>
    </div>
</div>