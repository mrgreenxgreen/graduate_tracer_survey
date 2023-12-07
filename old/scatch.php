<!DOCTYPE html>
<HTML>
    <head>

        <style>
            input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
        </style>

    </head>
    <body>
        <div>
            <form action="add.php" method="post">
                <input type="text" name="Name" />
                <input type="submit" value="Login" name="Submit"/>
            </form>
        </div>
    </body>
</HTML>