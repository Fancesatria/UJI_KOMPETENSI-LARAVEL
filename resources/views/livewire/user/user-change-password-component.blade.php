<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Change Password
                    </div>

                    <div class="panel-body">
                        @if (Session::has('pw_success'))
                            <div class="alert alert-success" role="alert">{{ Session::get('pw_success') }}</div>
                        @elseif(Session::has('pw_error'))
                            <div class="alert alert-danger" role="alert">{{ Session::get('pw_error') }}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="changePassword">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Current Password</label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control input-md" placeholder="Current Password" name="current_password" wire:model="current_password">
                                    @error('current_password')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">New Password</label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control input-md" placeholder="New Password" name="password" wire:model="password">
                                    @error('password')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label">Confirm New Password</label>
                                <div class="col-md-4">
                                    <input type="password" class="form-control input-md" placeholder="Confirm New Password" name="password_confirmation" wire:model="password_confirmation">
                                    @error('password_confirmation')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary ">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
