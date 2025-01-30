<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create Account</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="wrapper">
        <h1>Create Account</h1>
        <div class="text-form">
            <form action="/user/post" method="POST">
                @csrf
                <div class="text-field">
                    <input value="{{ old("username") }}" type="text" name="username" placeholder="Username" >
                    <i class='bx bxs-user-circle' id="icon-right"></i>
                </div>
                <div class="text-field">
                    <input value="{{ old("full_name") }}" type="text" name="full_name" placeholder="Full Name" >
                    <i class='bx bxs-user-circle' id="icon-right"></i>
                </div>
                <div class="text-field">
                    <input value="{{ old("email") }}" type="text" name="email" placeholder="Email" >
                    <i class='bx bxs-envelope' id="icon-right"></i>
                </div>
                <div class="select-field-lg">
                    <label>Department</label>
                    <select value="{{ old("department") }}" name="department" >
                        <option value="Accounts Payable">Accounts Payable</option>
                        <option value="Accounts Receivable">Accounts Receivable</option>
                        <option value="Building Process Improvement">Building Process Improvement</option>
                        <option value="Changeovers">Changeovers</option>
                        <option value="Customer support">Customer support</option>
                        <option value="DC Support">DC Support</option>
                        <option value="Expediting">Expediting</option>
                        <option value="Grainger">Grainger</option>
                        <option value="Help Desk">Help Desk</option>
                        <option value="Human Resources">Human Resources</option>
                        <option value="Inside Sales">Inside Sales</option>
                        <option value="Inside Sales Order Entry">Inside Sales Order Entry</option>
                        <option value="Inventory">Inventory</option>
                        <option value="IT Operations & Security">IT Operations & Security</option>
                        <option value="Local Sales Group">Local Sales Group</option>
                        <option value="Logistics">Logistics</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Operational Support">Operational Support</option>
                        <option value="Operations">Operations</option>
                        <option value="Outbound">Outbound</option>
                        <option value="Outside Sales">Outside Sales</option>
                        <option value="Owners">Owners</option>
                        <option value="Photos">Photos</option>
                        <option value="Pick">Pick</option>
                        <option value="Product Information Management">Product Information Management</option>
                        <option value="Purchasing">Purchasing</option>
                        <option value="Put Away">Put Away</option>
                        <option value="Receiving">Receiving</option>
                        <option value="Reception">Reception</option>
                        <option value="Returns">Returns</option>
                        <option value="Software Development">Software Development</option>
                        <option value="Trucks">Trucks</option>
                    </select>
                    <i class='bx bxs-book-content' id="icon-right"></i>
                </div>
                {{-- <div class="text-field">
                    <input type="password" name="password" placeholder="Password" id="pass_field" required>
                    <i class='bx bxs-key' id="see_pass"></i>
                </div>
                <div class="text-field">
                    <input type="password" name="confirm_password" placeholder="Confirm Password" id="confirm_pass_field" required>
                    <i class='bx bxs-key' id="confirm_see_pass"></i>
                </div> --}}
                <button type="submit" class="btn">Create User</button>
            </form>
        </div>
    </div>
</body>

</html>