<?php include('includes/admin_header.php') ?>

<?php 
if (isset($_GET['id'])) {
    $subscriber = Subscriber::find_by_id($_GET['id']);
    $subscriber->delete();
    header('location:subscribers.php');
}
?>
