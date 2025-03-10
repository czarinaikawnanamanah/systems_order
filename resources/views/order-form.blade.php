<!DOCTYPE html>
<html>
<head>
    <title>Order Form</title>
</head>
<body>
    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif
    <form action="/order" method="POST">
        @csrf
        <label>Email:</label>
        <input type="email" name="email" required><br>
        
        <label>Name:</label>
        <input type="text" name="name" required><br>

        <label>Item:</label>
        <input type="text" name="item" required><br>

        <button type="submit">Place Order</button>
    </form>
    <form action="{{ route('order.store') }}" method="POST">

</body>
</html>
