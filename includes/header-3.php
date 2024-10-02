<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas Condicionais</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        body {
            width: 100%;
        }

header {
    width: 100%;
    height: 80px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: slategrey;
}

header h1 {
    color: #fafafa;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    text-align: center;
}

h2,
h3,
h4,
h5,
h6 {
    width: 100%;
    text-align: center;
    margin-bottom: 16px;
}

main {
    width: 1000px;
    margin: 0 auto;
    padding: 20px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
}

form {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 20px;
    gap: 16px;
}

form input[type="text"],
form select {
    height: 40px;
    font-size: 20px;
    display: flex;
    align-items: center;
    padding: 0px 8px;

}

form input[type="submit"] {
    width: 150px;
    height: 40px;
    font-size: 16px;
}

button {
    width: 100px;
    height: 40px;
    font-size: 16px;
}

section {
    width: 470px;
    border: 1px solid #464646;
    border-radius: 20px;
    padding: 20px;
}

footer {
    width: 100%;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: slategrey;
    color: #fafafa;
    position: fixed;
    bottom: 0px;
}

.img {
   width: 100%;display: block;
}
</style>
</head>

<body>
    <header>
        <h1>Estrututras Condicionais em PHP</h1>
    </header>
    <main>