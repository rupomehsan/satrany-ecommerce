<template>
    <div class="row justify-content-center my-5">
        <div class="col-xl-8 col-md-10 col-12">
            <div class="profile-container mx-auto">
                <div class="profile-header">
                    <img
                        src="/dummy.png"
                        alt="Profile Picture"
                        class="profile-picture"
                    />
                    <h1 class="customer-name">John Doe</h1>
                </div>
                <div class="profile-details">
                    <h2>Profile Details</h2>
                    <p><strong>Email:</strong> john.doe@example.com</p>
                    <p><strong>Phone:</strong> +123 456 7890</p>
                    <p>
                        <strong>Address:</strong> 123 Main Street, Hometown,
                        Country
                    </p>
                </div>
                <div class="order-history">
                    <h2>Order History</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#12345</td>
                                <td>2024-01-15</td>
                                <td>Shipped</td>
                                <td>$150.00</td>
                            </tr>
                            <tr>
                                <td>#12346</td>
                                <td>2024-02-20</td>
                                <td>Processing</td>
                                <td>$250.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.profile-container {
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
    width: 100%;
    max-width: 800px;
}

.profile-header {
    background-color: #007bff;
    color: #fff;
    text-align: center;
    padding: 20px;
}

.profile-header .profile-picture {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-bottom: 10px;
}

.customer-name {
    margin: 0;
    font-size: 1.5em;
}

.profile-details,
.order-history {
    padding: 20px;
}

.profile-details h2,
.order-history h2 {
    margin-top: 0;
}

.profile-details p {
    margin: 10px 0;
}

.order-history table {
    width: 100%;
    border-collapse: collapse;
}

.order-history table,
.order-history th,
.order-history td {
    border: 1px solid #ddd;
    padding: 8px;
}

.order-history th {
    background-color: #007bff;
    color: white;
}

.order-history tr:nth-child(even) {
    background-color: #f2f2f2;
}
</style>
