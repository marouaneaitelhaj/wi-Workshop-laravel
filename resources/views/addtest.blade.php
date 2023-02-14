<form action="{{ url('storetest') }}" method="POST">
    @csrf
    {{-- <input type="text" name="name">
    <input type="number" name="age"> --}}
    <button type="submit">sub</button>
</form>