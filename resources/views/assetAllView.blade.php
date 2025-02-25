<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Asset List</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link href='{{asset('css/assets.css')}}' rel='stylesheet'>
    <?php $assets = $assets; ?>

</head>


<body>

    {{-- edit popup --}}
    
    <div class="overlay-container">
        <form action="/post-asset" method="POST" class="asset-form">

            @csrf

            <input type="text" id="request-type" name="request-type" value="" hidden> 
            <input type="text" id="delete-asset" name="delete-asset" value="no" hidden> 
            <input type="text" id="asset-id" name="id" value="" hidden>
            <h3 id="asset-id-display"></h3>

            <div id="close-overlay">
                <button type="button" onclick="editAsset(undefined,'close')"><i class='bx bx-x'></i></button>
            </div>


            {{-- select fields --}}
            <div class="edit-select-wrapper-row">
                <div id="edit-select-field-slim">
                    <label>Type</label>
                    <select name="type" id="edit-type">
                        <option value="Laptop">Laptop</option>
                        <option value="PC">PC</option>
                        <option value="Monitor">Monitor</option>
                    </select>
                </div>
                <div id="edit-select-field-slim">
                    <label>Status</label>
                    <select name="status" id="edit-status">
                        <option value="active">Active</option>
                        <option value="not in use">Not in use</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>


            {{-- text fields --}}
            <div class="edit-text-wrapper">
                <div id="edit-text-field">
                    <label>Make</label>
                    <input type="text" name="make" id="edit-make" placeholder="Make">
                </div>
                <div id="edit-text-field">
                    <label>Model</label>
                    <input type="text" name="model" id="edit-model" placeholder="Model">
                </div>
            </div>


            {{-- select fields --}}
            <div class="edit-select-wrapper-row">
                <div id="edit-select-field">
                    <label>Area</label>
                    <select name="area" id="edit-area">

                    </select>
                </div>

                <div id="edit-select-field">
                    <label>Location</label>
                    <select name="loaction" id="edit-location">

                    </select>
                </div>
            </div>


            {{-- text fields --}}
            <div class="edit-text-wrapper">
                <div id="edit-text-field">
                    <label>User</label>
                    <input type="text" name="user" id="edit-user" placeholder="User">
                </div>
            </div>


            {{-- btn fields --}}
            <div class="edit-btn-wrapper">
                <div id="edit-btn-field">
                    <button type="submit" name="save-changes" id="blue-btn">Save</button>
                    <button type="button" name="cancel-changes" id="grey-btn" onclick="editAsset(undefined,'close',undefined)">Cancel</button>
                </div>
            </div>

            <div id="delete-asset-btn">
                <button type="button" onclick="editAsset(undefined,'delete-open',undefined,undefined)"><i class='bx bx-trash'></i></button>
            </div>

            <div class="delete-asset-overlay">
                <div id="delete-asset-wrapper">
                    <h2>Confirm asset deletion</h2>
                    <div class="edit-btn-wrapper">
                        <div id="edit-btn-field">
                            <button type="button" id="blue-btn" onclick="editAsset(undefined,undefined,undefined,'yes')">Yes</button>
                            <button type="button" id="grey-btn" onclick="editAsset(undefined,'delete-close',undefined,undefined)">No</button>
                        </div>
                    </div>
                </div>
            </div>
            
        </form>
    </div>

    <div class="container">

        {{-- Sorting tools --}}
        <div class="toggleBtn">
            <button id="allToggle" onclick="sortToggle('all')">All</button>
            <button id="laptopToggle" onclick="sortToggle('laptop')">Laptop</button>
            <button id="pcToggle" onclick="sortToggle('pc')">PC</button>
            <button id="monitorToggle" onclick="sortToggle('monitor')">Monitor</button>
        </div>

        <div class="search-bar">
            <input oninput="sortSearch(document.getElementById('search-bar').value)" type="search" id="search-bar" placeholder="Search for Asset" value=""></input>
        </div>



        <div class="table-wrapper">

            <div class="create-asset-btn">
                <button onclick="editAsset(undefined,'open','add')"><i class='bx bxs-plus-square' ></i></button>
            </div>

            <table class="assets-table">
                <thead>
                    <tr>
                        <th onclick="sortTable('id')"> Key <i id="th-id" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('type')">Type <i id="th-type" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('make')">Make <i id="th-make" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('model')">Model <i id="th-model" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('locations_id')">Location <i id="th-locations_id" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('area')">Area <i id="th-area" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('user')">User<i id="th-user" class='bx bxs-chevron-down'></i></th>
                        <th onclick="sortTable('created_at')">Created <i id="th-created_at" class='bx bxs-chevron-down' ></i></th>
                        <th onclick="sortTable('status')">Status <i id="th-status" class='bx bxs-chevron-down' ></i></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="asset-tbody">

                </tbody>
            </table>

        </div>
    </div>

    

    <script> window.allAssetsArray = <?php echo json_encode($all); ?>;</script>
    <script type="text/javascript" src="js/assets.js"></script>

    
</body>
</html>