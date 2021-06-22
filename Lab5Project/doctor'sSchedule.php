<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Schedule</title>
</head>
<body>
    <h1>Doctor's Schedule</h1>
    <table >
        <tr>
            <td><b>Doctor's Name:</b></td>
            <td><input type="text"></td>
        </tr>
        <tr>
            <td><b>Select Duty Date:</b></td>
            <td> <select>
                <option>Select</option>
                <option>Sunday</option>
                <option>Monday</option>
                <option>Tuesday</option>
                <option>Wednesday</option>
                <option>Thurday</option>
                <option>Friday</option>
                <option>Saturday</option>
            </select></td>
        </tr>
        <tr>
            <td><b>Select Duty Time:</b></td>
            <td> <select>
                <option>Select</option>
                <option>10:00am-12:00pm</option>
                <option>12:00pm-2:00pm</option>
                <option>2:00pm-4:00pm</option>
                <option>4:00pm-6:00pm</option>
            </select></td>
        </tr>
        <tr>
            <td><b>Centre:</b></td>
            <td> <select>
                <option>Select</option>
                <option>Dhaka Medical College</option>
                <option>Kurmitola General Hospital</option>
            </select></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="Reset">
                <input type="submit" value="Submit">
            </td>
        </tr>
</table>
</body>
</html>