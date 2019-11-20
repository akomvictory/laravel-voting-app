<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Full Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>


                     <div class="form-group col-sm-6">
                    <label> Gender</label>
                    <select class="form-control" name="gender">

                      <option value="female">Female</option>
                       <option value="male">Male</option>
                      
                    </select>

                    </div>

<!-- Linkedin Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linkedin_url', 'Linkedin Url:') !!}
    {!! Form::text('linkedin_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Bio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bio', 'Bio:') !!}
    {!! Form::text('bio', null, ['class' => 'form-control']) !!}
</div>

<!-- Business Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('business_name', 'Business Name:') !!}
    {!! Form::text('business_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Reason For Nomination Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reason_for_nomination', 'Reason For Nomination:') !!}
    {!! Form::text('reason_for_nomination', null, ['class' => 'form-control']) !!}
</div>




<!--  / Start Only Admin AndModerator Get to See This  -->
<!-- Is Admin Selected Field -->
@if(Auth::user()->role_ids <3)
<div class="form-group col-sm-6">
    {!! Form::label('is_admin_selected', 'Is Admin Selected:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_admin_selected', 0) !!}
        {!! Form::checkbox('is_admin_selected', '1', null) !!}
    </label>
</div>


<!-- Is Won Field -->
<div class="form-group col-sm-6">
    {!! Form::label('is_won', 'Is Won:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('is_won', 0) !!}
        {!! Form::checkbox('is_won', '1', null) !!}
    </label>
</div>

@endif

<!--  / Start Only Admin AndModerator Get to See This  -->




<!-- Category Id Field -->

@if(isset($category->id))
<div class="form-group col-sm-6">
   
    {!! Form::hidden('category_id', $category->id, ['class' => 'form-control']) !!}
</div>

@else
<div class="form-group col-sm-6">
   
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

@endif

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    
</div>
