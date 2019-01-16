<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client();
        $res = $client->request('GET', 'http://localhost/webservice-tugas/public/api/buku');
        $result = $res->getBody();
        $clientes = json_decode($result, true);
        $title = 'Data Buku';

        return view('databuku')->with('clients', $clientes['data']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client();
        $url = 'http://localhost/webservice-tugas/public/api/buku/store';
        $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA3ZDk5MjNiYzg0NzgxOWY3NGRlYjM5ZTEyOTJmMjJkMzg4MDY4ODYwZDFhYzFjNjE4MDIzNjhmNDhkNTM4NjgyYjFhNDkzODY5ZjkyNjlhIn0.eyJhdWQiOiIxIiwianRpIjoiMDdkOTkyM2JjODQ3ODE5Zjc0ZGViMzllMTI5MmYyMmQzODgwNjg4NjBkMWFjMWM2MTgwMjM2OGY0OGQ1Mzg2ODJiMWE0OTM4NjlmOTI2OWEiLCJpYXQiOjE1NDcyMzc1OTQsIm5iZiI6MTU0NzIzNzU5NCwiZXhwIjoxNTc4NzczNTk0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.0m9DIQ39urvmpLzlv5NoEUljIl-6sYJ65WDpf-XF6iXpGqTV5_mij7J3u7jvPKW2ZFibwIIe36LccXgrR-fsv7GcaWRDZMKax82ygbzYVgqZsqr6HB7PnRCj-mtwn0JpMeQrYl8z2jmye_rId9SpNusJAXqQTn2aO671hMZVrPAwO30U6005Ks7qAljqC3hql0dEVgsfcK5HWpAjZbAfJWXQEcTHYeO7GSakpVE_uz0yMrOoWeFwx2VfJvWZEXWuxDi0WqUj_ojRe9URQogvdj82WrB-JFdRMrrVJxOvn-Xp3441G5YfINJo8GREgv5RBcQIvZ9JzR_uLXbwpqS6OuuxpGhumIYeSgsiQD1-gv_YFtL8ObBa8ORyYYRU8YY-Asmnx4Pq65gIMH6lCJL-3f-vvmCf78EJpEVnPk7_5s6XaoDfNW3Df7r92EcibjNxf3IbYIwlll40hypycv2kE3VapsiPHERTjn5KF8GqFX-wGauCz_ObItouWiI6ea_JLlr1C08AtKoHggejR-SI3v57UnXmsKhSvzx6HA59nHeD4C9Orhb9uX9bw1_j5ElSYNhxrJdAfZuOIdYfG8F_bzn6zdq0OkLtqUe9lOQLH6yPA1e2E2e8aoLC5slEB3ncBNl0tk1Ikirea8l4kFLRggKm_eBEYKEvC6i1T101FC4';
        $response = $client->request('POST', $url, [
                            'headers' => [
                                'X-XSRF-TOKEN' => csrf_token(),
                                'Accept' => 'application/json',
                                'Content-Type' => 'application/x-www-form-urlencoded',
                                'Authorization' => 'Bearer '.$token,
                            ],
                            'form_params' => [
                                'judul' => $request->judul,
                                'penerbit' => $request->penerbit,
                                'penulis' => $request->penulis,
                                'isbn' => $request->isbn,
                                'harga' => $request->harga,
                                'tahun' => $request->tahun,
                                'sinopsis' => $request->sinopsis,
                            ],
                        ]
                );

        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = new Client();
        $url = 'http://localhost/webservice-tugas/public/api/buku/'.$id;
        $response = $client->request('GET', $url);
        $result = $response->getBody();
        $clientes = json_decode($result, true);

        // return $clientes;
        return view('edit')->with('clients', $clientes['data']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $client = new Client();
        $url = 'http://localhost/webservice-tugas/public/api/buku/'.$id;
        // $token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjA3ZDk5MjNiYzg0NzgxOWY3NGRlYjM5ZTEyOTJmMjJkMzg4MDY4ODYwZDFhYzFjNjE4MDIzNjhmNDhkNTM4NjgyYjFhNDkzODY5ZjkyNjlhIn0.eyJhdWQiOiIxIiwianRpIjoiMDdkOTkyM2JjODQ3ODE5Zjc0ZGViMzllMTI5MmYyMmQzODgwNjg4NjBkMWFjMWM2MTgwMjM2OGY0OGQ1Mzg2ODJiMWE0OTM4NjlmOTI2OWEiLCJpYXQiOjE1NDcyMzc1OTQsIm5iZiI6MTU0NzIzNzU5NCwiZXhwIjoxNTc4NzczNTk0LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.0m9DIQ39urvmpLzlv5NoEUljIl-6sYJ65WDpf-XF6iXpGqTV5_mij7J3u7jvPKW2ZFibwIIe36LccXgrR-fsv7GcaWRDZMKax82ygbzYVgqZsqr6HB7PnRCj-mtwn0JpMeQrYl8z2jmye_rId9SpNusJAXqQTn2aO671hMZVrPAwO30U6005Ks7qAljqC3hql0dEVgsfcK5HWpAjZbAfJWXQEcTHYeO7GSakpVE_uz0yMrOoWeFwx2VfJvWZEXWuxDi0WqUj_ojRe9URQogvdj82WrB-JFdRMrrVJxOvn-Xp3441G5YfINJo8GREgv5RBcQIvZ9JzR_uLXbwpqS6OuuxpGhumIYeSgsiQD1-gv_YFtL8ObBa8ORyYYRU8YY-Asmnx4Pq65gIMH6lCJL-3f-vvmCf78EJpEVnPk7_5s6XaoDfNW3Df7r92EcibjNxf3IbYIwlll40hypycv2kE3VapsiPHERTjn5KF8GqFX-wGauCz_ObItouWiI6ea_JLlr1C08AtKoHggejR-SI3v57UnXmsKhSvzx6HA59nHeD4C9Orhb9uX9bw1_j5ElSYNhxrJdAfZuOIdYfG8F_bzn6zdq0OkLtqUe9lOQLH6yPA1e2E2e8aoLC5slEB3ncBNl0tk1Ikirea8l4kFLRggKm_eBEYKEvC6i1T101FC4';
        $response = $client->request('PATCH', $url, [
                            'headers' => [
                                'X-XSRF-TOKEN' => csrf_token(),
                                'Accept' => 'application/json',
                                'Content-Type' => 'application/x-www-form-urlencoded',
                            ],
                            'form_params' => [
                                'judul' => $request->judul,
                                'penerbit' => $request->penerbit,
                                'penulis' => $request->penulis,
                                'isbn' => $request->isbn,
                                'harga' => $request->harga,
                                'tahun' => $request->tahun,
                                'sinopsis' => $request->sinopsis,
                            ],
                        ]
                );

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $client = new Client();
        $url = 'http://localhost/webservice-tugas/public/api/buku/'.$id;
        $response = $client->request('DELETE', $url, [
                            'headers' => [
                                'X-XSRF-TOKEN' => csrf_token(),
                                'Accept' => 'application/json',
                            ],
                        ]
                );

        return redirect()->route('buku.index');
    }
}
