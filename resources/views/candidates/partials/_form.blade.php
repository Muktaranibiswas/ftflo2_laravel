<div class="form-group">
    {!! Form::label('candidate_name', 'Candidate Name:') !!}
    {!! Form::text('candidate_name') !!}
</div>
<div class="form-group">
    {!! Form::label('symbol', 'Symbol:') !!}
    {!! Form::text('symbol') !!}
</div>
<div class="form-group">
    {!! Form::Submit($submit_text, ['class'=>'btn primary']) !!}
</div>