

<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>



            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">

                        <label class="font-weight-semibold"> الاهتمامات</label>
                        @foreach($interests as $interest)<label class="font-weight-semibold"></label>
                        <div class="form-check">

                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="interest_id[]" value="{{$interest->id}}">
                                {{$interest->name}}
                            </label>

                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

    <div class="col-md-6">
        <div class="form-group">
            <label class="font-weight-semibold">المستخدمين</label>

            @foreach($users as $user)
            <div class="form-check form-check-right">
                <label class="form-check-label">
                   {{$user->name}}
                    <input type="radio" class="form-check-input" name="user_id" value="{{$user->id}}">
                </label>
            </div>
            @endforeach
        </div>
    </div>

</fieldset>
