<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sale Settings
                    </div>

                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <form action="" class="form-horizontal" wire:submit.prevent="updateSaleDate">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">sale Date</label>
                                <div class="col-md-4">
                                    <input type="text" id="sale-date" placeholder="yyyy/MM/DD H:M:S" class="form-control input-md" wire:model="sale_date" />
                                    @error('sale_date')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary ">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(function(){
            $('#sale-date').datetimepicker({
                format : 'Y-MM-DD h:m:s',
            }).on('dp.change', function(ev){
                //this is callback function
                var data = $('#sale-date').val();
                @this.set('sale_date', data);
            });
        });
    </script>
@endpush

