<html>
    <head>

    </head>
    <body>
        <form action="#" name="StudentRegistration" onsubmit="return(validate());">
            <table cellpadding="2" width='20%' align='center' style='background-color:#99ffff'>
                <tr>
                    <td colspan=2>
                        <center>
                            <font size=4>
                                <b>Student Registration Form</b>
                            </font>
                        </center>
                    </td>
                </tr>

                <tr>
                    <td>Name</td>
                    <td><input type="text" ></td>

                </tr>

                <tr>
                    <td>Father Name</td>
                    <td><input type="text" name='fathername' id='fathername'></td>
                </tr>

                <tr>
                    <td>Postal Address</td>
                    <td><input type="text" name='paddress' id='paddress'></td>
                </tr>

                <tr>
                    <td>Personal Address</td>
                    <td><input type="text" name='personaladdress' id='personaladdress'></td>
                </tr>

                <tr>
                    <td>Sex</td>
                    <td> 
                        <input type="radio" name='sex' value='male' >Male
                        <input type="radio" name='sex' value='female'>Female
                    </td>
                    
                    
                    
                </tr>

                <tr>
                    <td>City</td>
                    <td>
                        <select name="city" id="city">
                            <option value="-1">Select..</option>
                            <option value="newdelhi">New Delhi</option>
                            <option value="mumbai">Mumbai</option>
                            <option value="Goa">Goa</option>
                            <option value="patna">Patna</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td>Course</td>
                    <td>
                        <select name="course" id="course">
                            <option value="-1">Select..</option>
                            <option value="btech">B.Tech</option>
                            <option value="MCA">MCA</option>
                            <option value="MBA">MBA</option>
                            <option value="BCA">BCA</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>District</td>
                    <td>
                        <select name="district" id="district">
                            <option value="-1">Select..</option>
                            <option value="nalanda">Nalanda</option>
                            <option value="Patna">Patna</option>
                            <option value="Goa">Goa</option>
                            <option value="Mumbai">Mumbai</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>State</td>
                    <td> <select name="state" id="state">
                        <option value="-1">Select..</option>
                        <option value="NewDelhi">New Delhi</option>
                        <option value="Maharashtra">Maharastra</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Assam">Assam</option>
                    </select>
                    </td>
                </tr>

                <tr>
                    <td>Pincoe</td>
                    <td><input type="text" name='pincode' id='pincode'></td>
                </tr>

                <tr>
                    <td>Email id</td>
                    <td><input type="email" name=emailid></td>
                </tr>

                <tr>
                    <td>DOB</td>
                    <td><input type="text" name='dob' id='dob'></td>
                </tr>

                <tr>
                    <td>Mobile No</td>
                    <td><input type="text" name='mobileno' id='mobileno'></td>
                </tr>

                <tr>
                    <td><input type="reset"></td>
                    <td colspan='2'><input type="submit" value='SubmitForm'></td>
                </tr>


            </table>
        </form>
    </body>
</html>