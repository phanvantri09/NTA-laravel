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
        $bookData = Books::orderBy('id','DESC')->search()->paginate(5);
        return view('admin.layout.books.list', compact('bookData'));
    }
    public function edit(Books $id)
    {
        return view('admin.layout.books.edit', compact('id'));
    }
    public function add()
    {
        return view('admin.layout.books.add');
    }
    public function create(createRequest $request)
    {
        if($request->has('imgBook'))
        {
            $imgBook = $request->imgBook;
            $extension = $request->imgBook->extension();
            $imgBookName = time().'-Book.'.$extension;
            $imgBook->move(public_path('imgUploads'), $imgBookName);
        }
        $request->imgBook = $imgBookName;
        if(Books::create([
            'nameBook'=>$request->nameBook,
            'amountBook'=>$request->amountBook,
            'infoBook'=>$request->infoBook,
            'genreBook'=>$request->genreBook,
            'authorBook'=>$request->authorBook,
            'priceBook'=>$request->priceBook,
            'imgBook'=>$request->imgBook
        ]))
        {
            return redirect()->route('admin.listBook')->with('success','successfully Add.');
        }
    }
    public function delete(Books $id)
    {
        if($id->amountBook <= 0)
        {
            return redirect()->route('admin.listBook')->with('error','Can not delete !');
        }else
        {
            $id->delete();
            return redirect()->route('admin.listBook')->with('success','successfully  Delete');
        }
    }
    public function update(updateRequest $request, Books  $id)
    {
        if($request->has('imgBook'))
        {
            $imgBook = $request->imgBook;
            $extension = $request->imgBook->extension();
            $imgBookName = time().'Book.'.$extension;
            $imgBook->move(public_path('imgUploads'), $imgBookName);
        }
        $request->imgBook = $imgBookName;
        // 'email' => 'required|email',
        //   'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
         $id->update($request->only('nameBook','amountBook','infoBook','genreBook','authorBook','priceBook','updated_at','imgBook'));
         return redirect()->route('admin.listBook')->with('success',"Sửa thành công");
        //$id->update($request->all());
    }
}
