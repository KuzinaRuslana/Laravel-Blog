@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="mb-3">
    {{  html()->label('Имя', 'name')->class('form-label') }}
    {{  html()->input('text', 'name')->class('form-control') }}

</div>
<div class="mb-3">
    {{  html()->label('Содержание', 'body')->class('form-label') }}
    {{  html()->textarea('body')->class('form-control') }}
</div>