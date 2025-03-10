### Tinker

use App\Models\Categorie;

php artisan tinker

Categorie::create(['name'=>'php']);
$cat=Catrgorie::find(3);
$cat->update(['name'=>'java']);
$cat->delete();


