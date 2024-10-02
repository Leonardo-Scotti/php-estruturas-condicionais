<section>
    <h3>IF/ELSE</h3>
    <p>Digite um número e clique em OK para saber se é impar ou par:</p>
    <form action="ifelse.php" method="post">
        <input type="text" name="number" id="number" placeholder="Digite um número..." required>
        <input type="submit" value="OK">
    </form>
</section>
<section>
    <h3>SWITCH/CASE</h3>
    <p>Selecione uma linguagem de programação para um breve resumo:</p>
    <form action="switch.php" method="post">
        <select name="languages" id="languages">
            <option value="python">Phyton</option>
            <option value="js">JavaScript</option>
            <option value="java">Java</option>
            <option value="c#">C#</option>
            <option value="ts">TypeScript</option>
        </select>
        <input type="submit" value="OK">
    </form>
</section>