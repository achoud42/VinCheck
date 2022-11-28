
# Vinsearch

# Software Requirements

Vin Search Tool
Company: VinAudit, inc  </br>
Created By: Anurag Choudhary </br>
PHP Version -PHP 8.1.10   </br>
Framework - Lavarel 8  </br> 
Code Editor Tool- VS Code </br>

# 1. Introduction
# 1.1 Purpose

Create a search tool: http://<test VM>/vinsearch/search.php<br/>
1. Containing HTML which prompts the user for a "VIN" input:<br/>
VIN: [ ] [ Search ]<br/>
2. Upon clicking [ Search ], the PHP file will query a "vehicle_listings" MySQL table and output the matching result (if any) in a table...<br/>
VIN: 123<br/>
Year: ...<br/>
Make: ...<br/>
Model: ...<br/>
.... (other details)<br/>
Input file: https://drive.google.com/file/d/1Y-1S1ol9dKkM0zhcTR7X7OM5M2HN7rR5/view?usp=sharing<br/>
  
# 1.2 Definitions and Acronyms<br/>
Provide definitions the reader should understand before reading on.<br/>


# 2. Overall Description

The project requires all the data to be imported into the database. This database will be queried for a search string to give the intended output. 
# 3. System Features and Requirements
## 3.1 Database Design
The database will have a single table [vehicle_listings table](https://passimage.in/i/12ffbf4d2efbe610e5ea.png) which has the vin and the metadata.
The name of the db will be vinaudit
we will upload CSV file to create a table named 'vehicle_listings'. we will search our vin from this table.



## 3.2 External Interface Requirements

There will be a search bar  to enter the VIN and on clicking the search button the UI will display the desired result.
like [this](https://passimage.in/i/8a3a1cd2b0de40401aa0.png)

In the above url the search variable can be modified with the vin number to get the vehicle details.

## 3.3 Model Architecture (MVC)

In this project we will be implementing a mini-MVC framework for managing the data.

#### 3.3.1 Controller Class </br>
The controller binds everything to the view.
Since we just have one operation to search the VIN.
You can add other functions as the need arises
```
class VehicleListController extends Controller
{
    public function search( Request $request){
        $Search =$_GET['query'];
        $results = VehicleListing::where('vin','=',$Search)->get();
        return view('displayVin',['results' => $results]);
         }
}

```
#### 3.3.2 Web.php </br>
we route everything to index at the moment. Since the page only performs one operation(search)
But as we are adding new operations we can add those to the rerouting.
```
Route::get('/vinsearch','App\Http\Controllers\VehicleListController@Search');
Route::get('/', function () {
    return view('displayVin');
});

```

#### 3.3.3 Database Directory </br>
  Here we have  database directory contains our database migrations, model factories, and seeds.
  we use it to migarte and publish data to table .







