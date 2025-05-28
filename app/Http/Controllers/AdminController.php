<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        // Get total users
        $response = Http::get('http://localhost:5000/api/admin/stats');
        $stats = $response->json();
        
        return view('admin.dashboard', compact('stats'));
    }
    
    public function users()
    {
        // Get all users
        $response = Http::get('http://localhost:5000/api/admin/users');
        $users = $response->json();
        
        return view('admin.users', compact('users'));
    }
    
    public function articles()
    {
        // Get all articles
        $response = Http::get('http://localhost:5000/api/articles');
        $articles = $response->json();
        
        return view('admin.articles', compact('articles'));
    }
    
    public function storeArticle(Request $request)
    {
        $response = Http::post('http://localhost:5000/api/admin/articles', [
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category
        ]);
        
        return redirect()->back()->with('success', 'Article created successfully');
    }
    
    public function updateArticle(Request $request, $id)
    {
        $response = Http::put("http://localhost:5000/api/admin/articles/{$id}", [
            'title' => $request->title,
            'content' => $request->content,
            'category' => $request->category
        ]);
        
        return redirect()->back()->with('success', 'Article updated successfully');
    }
    
    public function deleteArticle($id)
    {
        $response = Http::delete("http://localhost:5000/api/admin/articles/{$id}");
        
        return redirect()->back()->with('success', 'Article deleted successfully');
    }
    
    public function toggleUserStatus($id)
    {
        $response = Http::post("http://localhost:5000/api/admin/users/{$id}/toggle-status");
        
        return redirect()->back()->with('success', 'User status updated successfully');
    }
} 