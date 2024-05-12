namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
   
 public function index(){       <- to come data from api
    $data = Product::all();
    return response()->json($data);
 }

 public function store(Request $req){      <- to make new data in api
    $data = $req->all();
    $newProd = product.create($data);
    return response()->json(['data'=>$newProd]);
 }
 public function update(Request $req, $id){
    $data = $req->all();
    $Product = Product::findOrFail();
    $Product['price'] = $data['price'];
    $Product['name'] = $data['name'];
    return response()-> json(['data'=> $Product])
 }
 public function delete(Request $req, $id){
    $data = $req->all();
    $product = Product::findOrFail($id);
    $Product = delete();

    return response()-> json(['data' => 'deleted'])
 }
}