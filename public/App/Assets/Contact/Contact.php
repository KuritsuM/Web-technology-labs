<?php

?>
<body>
<?php

//func($data['exactlyThatArgument']);
?>
<div class="contacts">
    <form class="contact-form" method="post" action="#">
        <input type="hidden">
        <label>Ваше ФИО: </label>
        <label>
            <input type="text" name="name">
            <?php
                if (!$data['success'] && array_key_exists("name", $data)) {
                    echo '<span>'.$data["name"].'</span>';
                }
            ?>
            <p class="name-clue clue" hidden>Между словами 1 пробел;<br/>строго 3 слова.</p>
        </label>
        <label>Ваш пол: </label>
        <section>
            <label>Мужской </label><input type="radio" name="gender">
            <label>Женский </label><input type="radio" name="gender">
            <label>Небинарный </label><input type="radio" name="gender">
        </section>
        <label>Ваш возраст:</label>
        <select>
            <optgroup label="age">
                <option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option><option>11</option><option>12</option><option>13</option><option>14</option><option>15</option><option>16</option><option>17</option><option>18</option><option>19</option><option>20</option><option>21</option><option>22</option><option>23</option><option>24</option><option>25</option><option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option><option>32</option><option>33</option><option>34</option><option>35</option><option>36</option><option>37</option><option>38</option><option>39</option><option>40</option><option>41</option><option>42</option><option>43</option><option>44</option><option>45</option><option>46</option><option>47</option><option>48</option><option>49</option><option>50</option><option>51</option><option>52</option><option>53</option><option>54</option><option>55</option><option>56</option><option>57</option><option>58</option><option>59</option><option>60</option><option>61</option><option>62</option><option>63</option><option>64</option><option>65</option><option>66</option><option>67</option><option>68</option><option>69</option><option>70</option><option>71</option><option>72</option><option>73</option><option>74</option><option>75</option><option>76</option><option>77</option><option>78</option><option>79</option><option>80</option><option>81</option><option>82</option><option>83</option><option>84</option><option>85</option><option>86</option><option>87</option><option>88</option><option>89</option><option>90</option><option>91</option><option>92</option><option>93</option><option>94</option><option>95</option><option>96</option><option>97</option><option>98</option><option>99</option>
            </optgroup>
        </select>
        <label>Ваш e-mail: </label>
        <label>
            <input type="text" name="email">
            <?php
            if (!$data['success'] && array_key_exists("email", $data)) {
                echo '<span>'.$data["email"].'</span>';
            }
            ?>
            <p class="email-clue clue" hidden>Между словами 1 пробел;<br/>строго 3 слова.</p>
        </label>
        <label>Ваш телефон: </label>
        <label>
            <input type="text" name="number">
            <?php
            if (!$data['success'] && array_key_exists("number", $data)) {
                echo '<span>'.$data["number"].'</span>';
            }
            ?>
            <p class="phone-clue clue" hidden>Номер начинается с плюса;<br/>Доступные коды регионов - 3, 7;<br/>от 9 до 11 цифр.</p>
        </label>
        <label>Дата рождения: </label>
        <input type="text" name="birthday" disabled>
        <div class="calendar">
            <div class="date">
                <select class="month">
                    <optgroup label="Месяц">
                        <option>Январь</option>
                        <option>Февраль</option>
                        <option>Март</option>
                        <option>Апрель</option>
                        <option>Май</option>
                        <option>Июнь</option>
                        <option>Июль</option>
                        <option>Август</option>
                        <option>Сентябрь</option>
                        <option>Октябрь</option>
                        <option>Ноябрь</option>
                        <option>Декабрь</option>
                    </optgroup>
                </select>
                <select class="year">
                    <optgroup label="Год">

                    </optgroup>
                </select>
            </div>
            <table>
                <tbody>
                <tr>
                    <th>SU</th>
                    <th>MN</th>
                    <th>TU</th>
                    <th>WN</th>
                    <th>TH</th>
                    <th>FR</th>
                    <th>ST</th>
                </tr>
                <tr class="calendar-day">

                </tr>
                <tr class="calendar-day">

                </tr>
                <tr class="calendar-day">

                </tr>
                <tr class="calendar-day">

                </tr>
                <tr class="calendar-day">

                </tr>
                </tbody>
            </table>
        </div>
        <button type="reset" class="reset-button">Очистить</button>
        <button type="submit" class="submit-button">Отправить</button>
        <?php
            if ($data['success'] && $_SERVER['REQUEST_METHOD'] === 'POST') echo 'Ответ отправлен успешно!';
        ?>
    </form>
</div>
<script src="assets/contact/js/calendar.js"></script>
<script type="module" src="js/history.js"></script>
</body>
</html>
