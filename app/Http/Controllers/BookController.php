<?php

namespace App\Http\Controllers;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Books\createRequest;
use App\Http\Requests\Books\updateRequest;

class BookController extends Controller
{
    public function list()
    {
        $bookData = Books::orderBy('id','DESC')->search()->paginate(1);
        return view('admin.layout.books.bookList', compact('bookData'));
    }
    public function edit(Books $id)
    {
        return view('admin.layout.books.bookEdit', compact('id'));
    }
    public function add()
    {
        return view('admin.layout.books.bookAdd');
    }
    public function create(createRequest $request)
    {
        if($request->has('imgBook')){
            $imgBook = $request->imgBook;
            $extension = $request->imgBook->extension();
            $imgBookName = time().'-'.'Book.'.$extension;
            $imgBook->move(public_path('imgUploads'), $imgBookName);
        }
        $request->merge(['imgBook' => $imgBookName]);
        if(Books::create($request->all())){
            return redirect()->route('admin.listbook')->with('success','successfully Add.');
        }
    }
    public function delete(Books $id)
    {
        if($id->amountBook <= 0)
        {
            return redirect()->route('admin.listbook')->with('error','Can not delete !');
        }else
        {
            $id->delete();
            return redirect()->route('admin.listbook')->with('success','successfully  Delete');
        }
    }
    public function update(updateRequest $request, Books  $id)
    {
        // 'email' => 'required|email',
        //   'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
         $id->update($request->only('nameBook','amountBook','infoBook','genreBook','authorBook','priceBook','updated_at','imgBook'));
         return redirect()->route('admin.listbook')->with('success',"Sửa thành công");
        //$id->update($request->all());
    }
}
