@extends("layout")
@section("content")
<style>
    h1 {
        margin-top: 150px;
        font-size: 46px;
        text-transform: uppercase;
        text-align: justify;
    }
    .table-div {
        margin-left: 120px;
        margin-right: 120px;
    }
    .styled-table {
    width: 100%;
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
    .styled-table thead tr {
        background-color: #080808;
        color: #ffffff;
        text-align: left;
    }
    .styled-table th,
    .styled-table td {
        font-size: 20px;
        padding: 12px 15px;
    }
    .styled-table tbody tr {
        border-bottom: 1px solid #dddddd;
    }

    .styled-table tbody tr:nth-of-type(even) {
        background-color: #f3f3f3;
    }

    .styled-table tbody tr:last-of-type {
        border-bottom: 2px solid #009879;
    }
    .styled-table tbody tr.active-row {
        font-weight: bold;
        color: #56eed0;
    }
    @media only screen and (max-width: 767px) {
        /* .styled-table {
            width: 50%;
        } */
        .table-div {
            margin: auto;
        }
        h1 {
            font-weight: bold;
            font-size: 21px;
            text-align: center;
        }
    }
</style>
<div>
    <h1 class="full-width text-center">
        Contact us through Emails
    </h1>
</div>
<div class = "table-div">   
        <table class="styled-table">
            <thead>
                <tr>
                    <th>Unit</th>
                    <th>Department / Unit</th>
                    <th>Email Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.0</td>
                    <td>Office of President</td>
                    <td>Ceo-pr@uu.edu.et</td>
                </tr>
                <tr>
                    <td>2.0</td>
                    <td>Office of Managing director, resource management and enterprise operations.</td>
                    <td>mdre@uu.edu.et</td>
                </tr>
                <tr>
                    <td>3.0</td>
                    <td>Office of the managing director Materials, Maintenance, and transportation management services</td>
                    <td>mdmht@uu.edu.et</td>
                </tr>
                <tr>
                    <td>4.0</td>
                    <td>Office of chief registrar </td>
                    <td>regestrar@uu.edu.et</td>
                </tr>
                <tr>
                    <td>5.0</td>
                    <td>Office of provost</td>
                    <td>provost@uu.edu.et</td>
                </tr>
                <tr>
                    <td>6.0</td>
                    <td>Office of Academic vice president, Gerji Campus</td>
                    <td>vpgc@uu.edu.et</td>
                </tr>
                <tr>
                    <td>7.0</td>
                    <td>Office of Academic vice president A/K/D/B campuses </td>
                    <td>vpakdb@uu.edu.et</td>
                </tr>
                <tr>
                    <td>8.0</td>
                    <td>Office of the vice president  general education, TVET & executive Training </td>
                    <td>vpgts@uu.edu.et</td>
                </tr>
                <tr>
                    <td>9.0</td>
                    <td>Office of the vice president Digitalization and Innovation </td>
                    <td>vpdi@uu.edu.et</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>UNITY UNIVERSITY</td>
                    <td>unityuniversity@uu.edu.et</td>
                </tr>
                
            </tbody>
        </table>
</div>
@endsection