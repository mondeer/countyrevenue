<form class="form-horizontal" action="{{url('/defaulter/create')}}" method="post">
  {{csrf_field()}}
  <div class="form-group">
    <label for="motorbike_reg">Motor Reg</label>
    <input type="text" name="motorbike_reg" value="">
  </div>
  <div class="form-group">
    <label for="defaulter_amount">Defaulter </label>
    <input type="text" name="defaulter_amount" value="">
  </div>
  <div class="form-group">
      <div class="col-md-6 col-md-offset-4">
          <button type="submit" class="btn btn-primary">Create</button>
      </div>
  </div>
</form>
