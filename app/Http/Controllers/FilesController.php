<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Method;
use App\Models\Variable;
use App\Models\Dependency;
use App\Models\Metric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fileUplaods = File::get();
        return view('file-upload', ['fileUploads' => $fileUplaods]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function multipleUpload(Request $request)
    {
        $this->validate($request, [
            'fileuploads' => 'required'
        ]);
        $files = $request->file('fileuploads');
        foreach($files as $file){

            $fileUpload = new File;
            $fileUpload->filename = $file->getClientOriginalName();
            $path = Storage::disk('s3')->putFileAs('files/', $file, $fileUpload->filename);
            // $path = $file->store('public/uploads');
            $fileUpload->filepath = Storage::disk('s3')->url($path);
            $fileUpload->type= $file->getClientOriginalExtension();
            $fileUpload->save();
        }   
 
        return redirect()->route('fileupload.index')->with('success','Files uploaded successfully!'); 

    }

    public function downloadFiles(){
        $files = Storage::disk('s3')->allFiles('methodCSV/');
        foreach($files as $file){
            if(str_ends_with($file,".csv")){
                $path = Storage::disk('local')->put($file,Storage::disk('s3')->get($file));
            }
        }
        foreach($files as $file){
            if(str_ends_with($file,".csv")){
                $local_file = Storage::disk('local')->path($file);
                $methodArr = $this->csvToArray($local_file);
                for($i = 0; $i < count($methodArr); $i++){
                    Method::firstOrCreate($methodArr[$i]);
                }
            }
        }
        return redirect()->route('fileupload.index')->with('success','Methods Files Download successfully!'); 
    }

    public function downloadVariableFiles(){
        $files = Storage::disk('s3')->allFiles('variableCSV/');
        foreach($files as $file){
            if(str_ends_with($file,".csv")){
                $path = Storage::disk('local')->put($file,Storage::disk('s3')->get($file));
            }
        }

        foreach($files as $file){
            if(str_ends_with($file,".csv")){
                $local_file = Storage::disk('local')->path($file);
                $methodArr = $this->csvToArray($local_file);
                for($i = 0; $i < count($methodArr); $i++){
                    Variable::firstOrCreate($methodArr[$i]);
                }
            }
        }


        return redirect()->route('fileupload.index')->with('success','Variable Files Download successfully!'); 
    }

    public function downloadDependencyFiles(){
        $files = Storage::disk('s3')->allFiles('dependenciesCSV/');
        foreach($files as $file){
            if(str_ends_with($file,".csv")){
                $path = Storage::disk('local')->put($file,Storage::disk('s3')->get($file));
            }
        }

        foreach($files as $file){
            if(str_ends_with($file,".csv")){
                $local_file = Storage::disk('local')->path($file);
                $methodArr = $this->csvToArray($local_file);
                for($i = 0; $i < count($methodArr); $i++){
                    Dependency::firstOrCreate($methodArr[$i]);
                }
            }
        }


        return redirect()->route('fileupload.index')->with('success','Dependencies Files Download successfully!'); 
    }

    public function downloadMetricFiles(){
        $files = Storage::disk('s3')->allFiles('metricsCSV/');
        foreach($files as $file){
            if(str_ends_with($file,".csv")){
                $path = Storage::disk('local')->put($file,Storage::disk('s3')->get($file));
            }
        }

        foreach($files as $file){
            if(str_ends_with($file,".csv")){
                $local_file = Storage::disk('local')->path($file);
                $methodArr = $this->csvToArray($local_file);
                for($i = 0; $i < count($methodArr); $i++){
                    Metric::firstOrCreate($methodArr[$i]);
                }
            }
        }


        return redirect()->route('fileupload.index')->with('success','Metrics Files Download successfully!'); 
    }

    function csvToArray($filename = '', $delimiter=','){
        if (!file_exists($filename) || !is_readable($filename))
            return false;

        $header = null;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== false){
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== false){
                if (!$header)
                    $header = $row;
                else
                    $data[] = array_combine($header, $row);
            }
            fclose($handle);
        }

        return $data;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        //
    }
}
