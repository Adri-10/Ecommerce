<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $blogs, $blog, $categories, $fullName, $i, $result;

    public function index()
    {
        $this->blogs = Blog::getAllBlog();
        return view('home', [
            'blogs' => $this->blogs,
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function category($id)
    {
        $this->blogs = Blog::getBlogCategoryId($id);
        return view('category', ['blogs' => $this->blogs]);
    }

    public function detail($id)
    {
        $this->blog = Blog::getBlogById($id);
        return view('detail', ['blog' => $this->blog]);
    }

    public function fullName(Request $request)
    {
        $this->fullName = $request->first_name . ' ' . $request->last_name;
        return back()->with('message', $this->fullName);
    }

    public function makeSeries(Request $request)
    {
        if ($request->starting_number > $request->ending_number) {
            for ($this->i = $request->starting_number; $this->i >= $request->ending_number; $this->i--) {
                $this->result .= $this->i . ' ';
            }
        } else {
            for ($this->i = $request->starting_number; $this->i <= $request->ending_number; $this->i++) {
                $this->result .= $this->i . ' ';
            }
        }

        return back()->with('result', $this->result);
    }

    public function evenOdd(Request $request)
    {
        if ($request->my_choice == "odd") {
            if ($request->starting_number > $request->ending_number) {
                for ($this->i = $request->starting_number; $this->i >= $request->ending_number; $this->i--) {
                    if ($this->i % 2 != 0) {
                        $this->result .= $this->i . ' ';
                    }
                }
            }
            else {
                for ($this->i = $request->starting_number; $this->i <= $request->ending_number; $this->i++) {
                    if ($this->i % 2 != 0) {
                        $this->result .= $this->i . ' ';
                    }
                }
            }
        }
        if ($request->my_choice == "even") {
            {
                if ($request->starting_number > $request->ending_number) {
                    for ($this->i = $request->starting_number; $this->i >= $request->ending_number; $this->i--) {
                        if ($this->i % 2 == 0) {
                            $this->result .= $this->i . ' ';
                        }

                    }
                } else {
                    for ($this->i = $request->starting_number; $this->i <= $request->ending_number; $this->i++) {

                        if ($this->i % 2 == 0) {
                            $this->result .= $this->i . ' ';
                        }
                    }
                }
            }
        }
        return back()->with('EvenOddResult', $this->result);
    }
    public function myCalculator(Request $request)
    {
        if ($request->choice == "+")
        {
            $this->result = $request->first_number + $request->second_number;
        }
        elseif ($request->choice == "-")
        {
            $this->result = $request->first_number - $request->second_number;

        }
        elseif ($request->choice == "*")
        {
            $this->result = $request->first_number * $request->second_number;
        }
        elseif ($request->choice == "/")
        {
            $this->result = $request->first_number / $request->second_number;
        }
        elseif ($request->choice == "%")
        {
            $this->result = $request->first_number % $request->second_number;
        }
        return back()->with('calcResult', $this->result);
    }
}
