<x-app-layout>
<!-- component -->
<div class="leading-loose max-w-4xl">
  <form class="mx-auto m-4 p-10 bg-white rounded shadow-xl">
    <p class="text-gray-800 font-medium">Order information</p>
    <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inventory_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]."<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </form>
</div>
</x-app-layout>