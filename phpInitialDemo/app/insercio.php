<!doctype html>
<html>
<head>
    <title>Insercio de registre tasca</title>
<body>
    <form method="post" action="insercio2.php">
        Introdueix les dades:
        <br>
        Nom:
        <input type="text" name="name" size="45" required>
        <br>
        Descripcio:
        <input type="text" name="description" size="255" required>
        <br>
        Data Inici:
        <input type="datetime" name="startDate" required>
        <br>
        Data Final:
        <input type="text" name="endDate" required>
        <br>
        Codi Usuari:
        <input type="number" name="users_id" size="11" required>
        <br>
        Estatus tasca:
        <input type="text" name="status_id" size="5" required>
        <br>
        <input type="submit" value="Confirmar">

    </form>
</body>
</html>