<div class="form-group">
    <label class="col-sm-3 control-label">Gender</label>
    <div class="col-sm-9 m-t5">
        <input type="radio" value="M" name="gender" class="styleInput" id="male" {!! $data->genderMale !!}><label for="male" class="m-r15">Male <span></span> </label>
        <input type="radio" value="F" name="gender" class="styleInput" id="female" {!! $data->genderFemale !!}><label for="female" class="m-r15">Female <span></span></label>
        <input type="radio" value="Other" name="gender" class="styleInput" id="other" {!! $data->genderOthers !!}><label for="other">Other <span></span></label>
    </div>
</div>