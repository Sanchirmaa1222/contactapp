<form>
<select class="custom-select" name="company_id" onchange = "this.form.submit()">
    <option value="" selected>All Companies</option>
    @foreach ($companies as $id => $aa)
        <option value="{{ $id }}" @if ($id == request()->query("company_id")) selected @endif >{{ $aa }}</option>
    @endforeach
</select>
</form>
