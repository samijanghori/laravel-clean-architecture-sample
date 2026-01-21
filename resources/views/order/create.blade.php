<form method="POST" action="/orders">
    @csrf

    <input type="number" name="amount" placeholder="Amount">

    <select name="payment_method">
        <option value="online">Online</option>
        <option value="cash">Cash</option>
    </select>

    <button type="submit">Submit</button>
</form>
