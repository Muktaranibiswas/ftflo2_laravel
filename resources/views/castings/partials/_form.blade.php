<div class="form-group">
    {!! Form::label('voter_id', 'Voter_id:') !!}
    {!! Form::text('voter_id') !!}
</div>
<div class="form-group">
    {!! Form::label('select_candidate', 'Select Symbol of Candidate:') !!}
    {!! Form::text('select_candidate') !!}
</div>
<div class="form-group">
    {!! Form::Submit($submit_text, ['class'=>'btn primary']) !!}
</div>