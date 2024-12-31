<div>

    <form wire:submit="add_train"  >
        @csrf

        <div class="row">
            <div class="col-sm-12">
              <div class="form-group mb-3">
                <input type="text" wire:model='name' name="name" class="form-control" value="{{isset($train ) ? $train->name : old('name')}}" placeholder="Enter Train Name">
              </div>
            </div>

          </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group mb-3">
                <input type="text"  wire:model='train_code' name="train_code" class="form-control" value="{{isset($train) ? $train->train_code : old('train_code')}}" placeholder="Enter Train Code">
              </div>
            </div>

          </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group mb-3">
                <input type="text" wire:model='train_type' name="train_type" class="form-control" value="{{isset($train) ? $train->train_type : old('train_type')}}" placeholder="Enter Train Type">
              </div>
            </div>

          </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group mb-3">
                <input type="datetime-local" wire:model='reach_time'name="reach_time" class="form-control" value="{{isset($train) ? $train->reach_time : old('reach_time')}}" placeholder="Train Reach Time">
              </div>
            </div>

          </div>
        <div class="row">
            <div class="col-sm-12">
              <div class="form-group mb-3">
                <input type="datetime-local" wire:model='start_time'  name="start_time" class="form-control" value="{{isset($train) ? $train->start_time : old('reach_time')}}" placeholder="Train start Time">
              </div>
            </div>

          </div>


                <div class="col-sm-6">
                 <button type="submit" class="btn btn-primary">{{isset($page) ? __('Submit') :__('Update')}}</button>
                  </div>
                </form>

</div>
