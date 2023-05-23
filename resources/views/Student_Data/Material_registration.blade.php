@extends('Student_Data.Student_dashpord_layout')
@vite(["resources/css/Material_registration.css"])
@section('Material_registration')
<section class="subject_regester">
    <div class="container">
        <div class="titel">
            <h2>Register your materials</h2>
        </div>
        <div class="select_material">
            <form action="/action_page.php">
                <label for="cars">Choose your materials :</label>
                <select id="cars" name="cars">
                    <option name="select_sub" value="volvo">Software</option>
                    <option name="select_sub" value="saab">Machine learning</option>
                    <option name="select_sub" value="fiat">Programing</option>
                    <option name="select_sub" value="audi">Network</option>
                </select>
                <input type="submit" value="Add Subject">
            </form>

        </div>
        <div class="material_table">
            <table>
                <tr>
                    <th>Subject Index</th>
                    <th>Subject Name</th>
                    <th>Doctor Name</th>
                    <th>Editing</th>
                </tr>
                <tr>
                    <td> 1</td>
                    <td> Software</td>
                    <td>Ashraf Elsesy</td>
                    <td>delete</td>
                </tr>
                <tr>
                    <td> 1</td>
                    <td> Software</td>
                    <td>Ashraf Elsesy</td>
                    <td>delete</td>
                </tr>
                <tr>
                    <td> 1</td>
                    <td> Software</td>
                    <td>Ashraf Elsesy</td>
                    <td>delete</td>
                </tr>

            </table>
            <div class="submit_subj">
                <input type="submit" value="submit Subject">

            </div>
        </div>
    </div>
</section>
@endsection