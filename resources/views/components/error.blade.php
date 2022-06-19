<div style="font-family: yekanBakh-Regular">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li><p>{{ $error }}</p></li>
                @endforeach
            </ul>
        </div><br />
    @endif
</div>
