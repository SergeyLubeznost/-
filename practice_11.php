<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice_11</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>

    <?php
$a=0;
$b=0;

$a1 = !$a ? "true" : "false";
$a2 = $a || $b ? "true" : "false";
$a3 = $a && $b ? "true" : "false";
$a4 = $a ^ $b ? "true" : "false";

$ad=0;
$bd=1;

$b1 = !$ad ? "true" : "false";
$b2 = $ad || $bd ? "true" : "false";
$b3 = $ad && $bd ? "true" : "false";
$b4 = $ad ^ $bd ? "true" : "false";


$at=1;
$bt=0;

$d1 = !$at ? "true" : "false";
$d2 = $at || $bt ? "true" : "false";
$d3 = $at && $bt ? "true" : "false";
$d4 = $at ^ $bt ? "true" : "false";


$af=1;
$bf=1;

$c1 = !$af ? "true" : "false";
$c2 = $af || $bf ? "true" : "false";
$c3 = $af && $bf ? "true" : "false";
$c4 = $af ^ $bf ? "true" : "false";


// Выражения гибкого сравнения
$ftru = TRUE == TRUE ? "true" : "false";
$ftru2 = TRUE == FALSE ? "true" : "false";
$ftru3 = TRUE == 1 ? "true" : "false";
$ftru4 = TRUE == 0 ? "true" : "false";
$ftru5 = TRUE == -1 ? "true" : "false";
$ftru6 = TRUE == "1" ? "true" : "false";
$ftru7 = TRUE == null ? "true" : "false";
$ftru8 = TRUE == "php" ? "true" : "false";

$ftru9 = FALSE == TRUE ? "true" : "false";
$ftru10 = FALSE == FALSE ? "true" : "false";
$ftru11 = FALSE == 1 ? "true" : "false";
$ftru12 = FALSE == 0 ? "true" : "false";
$ftru13 = FALSE == -1 ? "true" : "false";
$ftru14 = FALSE == "1" ? "true" : "false";
$ftru15 = FALSE == null ? "true" : "false";
$ftru16 = FALSE == "php" ? "true" : "false";


$ftru17 = 1 == TRUE ? "true" : "false";
$ftru18 = 1 == FALSE ? "true" : "false";
$ftru19 = 1 == 1 ? "true" : "false";
$ftru20 = 1 == 0 ? "true" : "false";
$ftru21 = 1 == -1 ? "true" : "false";
$ftru22 = 1 == "1" ? "true" : "false";
$ftru23 = 1 == null ? "true" : "false";
$ftru24 = 1 == "php" ? "true" : "false";

$ftru25 = 0 == TRUE ? "true" : "false";
$ftru26 = 0 == FALSE ? "true" : "false";
$ftru27 = 0 == 1 ? "true" : "false";
$ftru28 = 0 == 0 ? "true" : "false";
$ftru29 = 0 == -1 ? "true" : "false";
$ftru30 = 0 == "1" ? "true" : "false";
$ftru31 = 0 == null ? "true" : "false";
$ftru32 = 0 == "php" ? "true" : "false";

$ftru33 = -1 == TRUE ? "true" : "false";
$ftru34 = -1 == FALSE ? "true" : "false";
$ftru35 = -1 == 1 ? "true" : "false";
$ftru36 = -1 == 0 ? "true" : "false";
$ftru37 = -1 == -1 ? "true" : "false";
$ftru38 = -1 == "1" ? "true" : "false";
$ftru39 = -1 == null ? "true" : "false";
$ftru40 = -1 == "php" ? "true" : "false";

$ftru41 = "1" == TRUE ? "true" : "false";
$ftru42 = "1" == FALSE ? "true" : "false";
$ftru43 = "1" == 1 ? "true" : "false";
$ftru44 = "1" == 0 ? "true" : "false";
$ftru45 = "1" == -1 ? "true" : "false";
$ftru46 = "1" == "1" ? "true" : "false";
$ftru47 = "1" == null ? "true" : "false";
$ftru48 = "1" == "php" ? "true" : "false";

$ftru49 = null == TRUE ? "true" : "false";
$ftru50 = null == FALSE ? "true" : "false";
$ftru51 = null == 1 ? "true" : "false";
$ftru52 = null == 0 ? "true" : "false";
$ftru53 = null == -1 ? "true" : "false";
$ftru54 = null == "1" ? "true" : "false";
$ftru55 = null == null ? "true" : "false";
$ftru56 = null == "php" ? "true" : "false";

$ftru57 = "php" == TRUE ? "true" : "false";
$ftru58 = "php" == FALSE ? "true" : "false";
$ftru59 = "php" == 1 ? "true" : "false";
$ftru60 = "php" == 0 ? "true" : "false";
$ftru61 = "php" == -1 ? "true" : "false";
$ftru62 = "php" == "1" ? "true" : "false";
$ftru63 = "php" == null ? "true" : "false";
$ftru64 = "php" == "php" ? "true" : "false";
// Выражения гибкого сравнения

// Выражения гибкого сравнения
$ffals = TRUE === TRUE ? "true" : "false";
$ffals2 = TRUE === FALSE ? "true" : "false";
$ffals3 = TRUE === 1 ? "true" : "false";
$ffals4 = TRUE === 0 ? "true" : "false";
$ffals5 = TRUE === -1 ? "true" : "false";
$ffals6 = TRUE === "1" ? "true" : "false";
$ffals7 = TRUE === null ? "true" : "false";
$ffals8 = TRUE === "php" ? "true" : "false";

$ffals9 = FALSE === TRUE ? "true" : "false";
$ffals10 = FALSE === FALSE ? "true" : "false";
$ffals11 = FALSE === 1 ? "true" : "false";
$ffals12 = FALSE === 0 ? "true" : "false";
$ffals13 = FALSE === -1 ? "true" : "false";
$ffals14 = FALSE === "1" ? "true" : "false";
$ffals15 = FALSE === null ? "true" : "false";
$ffals16 = FALSE === "php" ? "true" : "false";


$ffals17 = 1 === TRUE ? "true" : "false";
$ffals18 = 1 === FALSE ? "true" : "false";
$ffals19 = 1 === 1 ? "true" : "false";
$ffals20 = 1 === 0 ? "true" : "false";
$ffals21 = 1 === -1 ? "true" : "false";
$ffals22 = 1 === "1" ? "true" : "false";
$ffals23 = 1 === null ? "true" : "false";
$ffals24 = 1 === "php" ? "true" : "false";

$ffals25 = 0 === TRUE ? "true" : "false";
$ffals26 = 0 === FALSE ? "true" : "false";
$ffals27 = 0 === 1 ? "true" : "false";
$ffals28 = 0 === 0 ? "true" : "false";
$ffals29 = 0 === -1 ? "true" : "false";
$ffals30 = 0 === "1" ? "true" : "false";
$ffals31 = 0 === null ? "true" : "false";
$ffals32 = 0 === "php" ? "true" : "false";

$ffals33 = -1 === TRUE ? "true" : "false";
$ffals34 = -1 === FALSE ? "true" : "false";
$ffals35 = -1 === 1 ? "true" : "false";
$ffals36 = -1 === 0 ? "true" : "false";
$ffals37 = -1 === -1 ? "true" : "false";
$ffals38 = -1 === "1" ? "true" : "false";
$ffals39 = -1 === null ? "true" : "false";
$ffals40 = -1 === "php" ? "true" : "false";

$ffals41 = "1" === TRUE ? "true" : "false";
$ffals42 = "1" === FALSE ? "true" : "false";
$ffals43 = "1" === 1 ? "true" : "false";
$ffals44 = "1" === 0 ? "true" : "false";
$ffals45 = "1" === -1 ? "true" : "false";
$ffals46 = "1" === "1" ? "true" : "false";
$ffals47 = "1" === null ? "true" : "false";
$ffals48 = "1" === "php" ? "true" : "false";

$ffals49 = null === TRUE ? "true" : "false";
$ffals50 = null === FALSE ? "true" : "false";
$ffals51 = null === 1 ? "true" : "false";
$ffals52 = null === 0 ? "true" : "false";
$ffals53 = null === -1 ? "true" : "false";
$ffals54 = null === "1" ? "true" : "false";
$ffals55 = null === null ? "true" : "false";
$ffals56 = null === "php" ? "true" : "false";

$ffals57 = "php" === TRUE ? "true" : "false";
$ffals58 = "php" === FALSE ? "true" : "false";
$ffals59 = "php" === 1 ? "true" : "false";
$ffals60 = "php" === 0 ? "true" : "false";
$ffals61 = "php" === -1 ? "true" : "false";
$ffals62 = "php" === "1" ? "true" : "false";
$ffals63 = "php" === null ? "true" : "false";
$ffals64 = "php" === "php" ? "true" : "false";

echo"

<table>
<caption><h2>Таблица истинности PHP</h2></caption>
<tr>
<th>A</th>
<th>B</th>
<th>!A</th>
<th>A || B</th>
<th>A && B</th>
<th>A xor B</th>
</tr>

<tr><td>0</td><td>0</td><td>$a1 </td><td>$a2</td><td>$a3</td><td>$a4</td></tr>
<tr><td>0</td><td>1</td><td>$b1 </td><td>$b2</td><td>$b3</td><td>$b4</td></tr>
<tr><td>1</td><td>0</td><td>$d1 </td><td>$d2</td><td>$d3</td><td>$d4</td></tr>
<tr><td>1</td><td>1</td><td>$c1</td><td>$c2</td><td>$c3</td><td>$c4</td></tr>



</table>

<table>
<caption><h2>Гибкое сравнение в PHP</h2></caption>
<tr>
<th></th>
<th>true</th>
<th>false</th>
<th>1</th>
<th>0</th>
<th>-1</th>
<th>\"1\"</th>
<th>null</th>
<th>\"php\"</th>
</tr>

<tr><td style=\"background-color: darkgray; font-weight:700;\">true</td><td>$ftru</td><td>$ftru2</td><td>$ftru3</td><td>$ftru4</td><td>$ftru5</td><td>$ftru6</td><td>$ftru7</td><td>$ftru8</td></tr>
<tr><td style=\"background-color: darkgray; font-weight:700;\">false</td><td>$ftru9</td><td>$ftru10</td><td>$ftru11</td><td>$ftru12</td><td>$ftru13</td><td>$ftru14</td><td>$ftru15</td><td>$ftru16</td></tr>
<tr><td style=\"background-color: darkgray; font-weight:700;\">1</td><td>$ftru17</td><td>$ftru18</td><td>$ftru19</td><td>$ftru20</td><td>$ftru21</td><td>$ftru22</td><td>$ftru23</td><td>$ftru24</td></tr>
<tr><td style=\"background-color: darkgray; font-weight:700;\">0</td><td>$ftru25</td><td>$ftru26</td><td>$ftru27</td><td>$ftru28</td><td>$ftru29</td><td>$ftru30</td><td>$ftru31</td><td>$ftru32</td></tr>
<tr><td style=\"background-color: darkgray; font-weight:700;\">-1</td><td>$ftru33</td><td>$ftru34</td><td>$ftru35</td><td>$ftru36</td><td>$ftru37</td><td>$ftru38</td><td>$ftru39</td><td>$ftru40</td></tr>
<tr><td style=\"background-color: darkgray; font-weight:700;\">\"1\"</td><td>$ftru41</td><td>$ftru42</td><td>$ftru43</td><td>$ftru44</td><td>$ftru45</td><td>$ftru46</td><td>$ftru47</td><td>$ftru48</td></tr>
<tr><td style=\"background-color: darkgray; font-weight:700;\">null</td><td>$ftru49</td><td>$ftru50</td><td>$ftru51</td><td>$ftru52</td><td>$ftru53</td><td>$ftru54</td><td>$ftru55</td><td>$ftru56</td></tr>
<tr><td style=\"background-color: darkgray; font-weight:700;\">\"php\"</td><td>$ftru57</td><td>$ftru58</td><td>$ftru59</td><td>$ftru60</td><td>$ftru61</td><td>$ftru62</td><td>$ftru63</td><td>$ftru64</td></tr>



</table>
<table>
<caption><h2>Жесткое сравнение в PHP</h2></caption>
<tr>
<th></th>
<th>true</th>
<th>false</th>
<th>1</th>
<th>0</th>
<th>-1</th>
<th>\"1\"</th>
<th>null</th>
<th>\"php\"</th>
</tr>

<tr><td style=\"background-color: darkgray; font-weight:700;\">true</td><td>$ffals</td><td>$ffals2</td><td>$ffals3</td><td>$ffals4</td><td>$ffals5</td><td>$ffals6</td><td>$ffals7</td><td>$ffals8</td></tr>
<tr><td style=\"background-color: darkgray;font-weight:700;\">false</td><td>$ffals9</td><td>$ffals10</td><td>$ffals11</td><td>$ffals12</td><td>$ffals13</td><td>$ffals14</td><td>$ffals15</td><td>$ffals16</td></tr>
<tr><td style=\"background-color: darkgray;font-weight:700;\">1</td><td>$ffals17</td><td>$ffals18</td><td>$ffals19</td><td>$ffals20</td><td>$ffals21</td><td>$ffals22</td><td>$ffals23</td><td>$ffals24</td></tr>
<tr><td style=\"background-color: darkgray;font-weight:700;\">0</td><td>$ffals25</td><td>$ffals26</td><td>$ffals27</td><td>$ffals28</td><td>$ffals29</td><td>$ffals30</td><td>$ffals31</td><td>$ffals32</td></tr>
<tr><td style=\"background-color: darkgray;font-weight:700;\">-1</td><td>$ffals33</td><td>$ffals34</td><td>$ffals35</td><td>$ffals36</td><td>$ffals37</td><td>$ffals38</td><td>$ffals39</td><td>$ffals40</td></tr>
<tr><td style=\"background-color: darkgray;font-weight:700;\">\"1\"</td><td>$ffals41</td><td>$ffals42</td><td>$ffals43</td><td>$ffals44</td><td>$ffals45</td><td>$ffals46</td><td>$ffals47</td><td>$ffals48</td></tr>
<tr><td style=\"background-color: darkgray;font-weight:700;\">null</td><td>$ffals49</td><td>$ffals50</td><td>$ffals51</td><td>$ffals52</td><td>$ffals53</td><td>$ffals54</td><td>$ffals55</td><td>$ffals56</td></tr>
<tr><td style=\"background-color: darkgray;font-weight:700;\">\"php\"</td><td>$ffals57</td><td>$ffals58</td><td>$ffals59</td><td>$ffals60</td><td>$ffals61</td><td>$ffals62</td><td>$ffals63</td><td>$ffals64</td></tr>



</table>




  "  ?>
</body>
</html>