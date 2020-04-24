<?php require 'header.php'; ?>
<body>

    <h1>Form Example</h1>

    <h2>Form GET HTTP METHOD Example.</h2>
    
    <form action="get_welcome.php" method="GET">
        <p>Name: <input type="text" name="person_name" /></p>
        <p>Email: <input type="email" name="person_email" /></p>
        <input type="submit" value="Submit" />
    </form>
</body>

<?php require 'footer.php'; ?>
