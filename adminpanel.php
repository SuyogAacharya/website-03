<?php
session_start();



// Include the database connection file
include('db_connection.php');

// Process form submissions for adding/deleting sets
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_set'])) {
        // Handle adding sets (perform necessary database operations)
        // You need to implement the logic for adding sets to the database
        // Example: Insert the set details into a 'sets' table
        $setName = $_POST['set_name'];
        // Perform database insertion here

    } elseif (isset($_POST['delete_set'])) {
        // Handle deleting sets (perform necessary database operations)
        // You need to implement the logic for deleting sets from the database
        // Example: Delete the set from the 'sets' table based on set ID
        $setId = $_POST['set_id'];
        // Perform database deletion here
    }
}

// Fetch existing sets from the database (you need to implement this part)
// Example: Fetch sets from the 'sets' table in the database
// $sets = fetchSetsFromDatabase();
$sets = []; // Replace this line with actual fetching logic

// Include header, topbar, and sidebar
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>

<!-- Admin Dashboard Content -->
<div class="container mt-5">
    <h2>Admin Dashboard</h2>

    <!-- Add Set Form -->
    <div class="mb-4">
        <h4>Add Set</h4>
        <form method="post" action="admin_dashboard.php">
            <div class="form-group">
                <label for="set_name">Set Name:</label>
                <input type="text" class="form-control" id="set_name" name="set_name" required>
            </div>
            <button type="submit" class="btn btn-primary" name="add_set">Add Set</button>
        </form>
    </div>

    <!-- Delete Set Form -->
    <div>
        <h4>Delete Set</h4>
        <form method="post" action="admin_dashboard.php">
            <div class="form-group">
                <label for="set_id">Select Set:</label>
                <select class="form-control" id="set_id" name="set_id" required>
                    <?php foreach ($sets as $set): ?>
                        <option value="<?php echo $set['id']; ?>"><?php echo $set['name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-danger" name="delete_set">Delete Set</button>
        </form>
    </div>
</div>

<?php
// Include footer
include('includes/footer.php');
?>
