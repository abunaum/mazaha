@extends('layouts.main')

@section('heads')
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/fixedheader/3.2.4/css/fixedHeader.bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap.min.css" rel="stylesheet"/>
@endsection

@section('content')
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container mt-3">
            <center>
                <h2>Staff Pengajar MA ZAHA 1</h2>
            </center>
        </div>
    </div>
    <section>
        <div class="container" data-aos="fade-up">
            <div>
                <table id="sp" class="display table table-striped table-bordered nowrap" style="width:100%">
                    <thead>
                    <tr>
                        <!--                    <th scope="col">#</th>-->
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Bidang Studi</th>
                        <th scope="col">No HP</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <!--                    <td>1</td>-->
                        <td>KH. AHSAN MALIKI, S.Sy</td>
                        <td>KEPALA MADRASAH</td>
                        <td>MULOK</td>
                        <td>0811353331 / 08113224477</td>
                    </tr>
                    <tr>
                        <!--                    <td>2</td>-->
                        <td>NON AHSAN QOMARUS ZAMAN, S.PdI</td>
                        <td>GURU</td>
                        <td>AKHLAK</td>
                        <td>081252473947</td>
                    </tr>
                    <tr>
                        <!--                    <td>3</td>-->
                        <td>NON AHSAN HABIBIFILLAH, S.Pd.I</td>
                        <td>GURU</td>
                        <td>BAHASA ARAB</td>
                        <td>082247566679</td>
                    </tr>
                    <tr>
                        <!--                    <td>4</td>-->
                        <td>ACH. MUSTA’IN, S.PdI</td>
                        <td>GURU</td>
                        <td>BAHASA ARAB</td>
                        <td>081233410996</td>
                    </tr>
                    <tr>
                        <!--                    <td>5</td>-->
                        <td>SOLIHIN, S.HI</td>
                        <td>GURU & WAKA KURIKULUM</td>
                        <td>TIK</td>
                        <td>085233050511</td>
                    </tr>
                    <tr>
                        <!--                    <td>6</td>-->
                        <td>SHOHIHAH, S.PdI</td>
                        <td>GURU</td>
                        <td>AQIDAH AKHLAQ</td>
                        <td></td>
                    </tr>
                    <tr>
                        <!--                    <td>7</td>-->
                        <td>ARIF WIJAYA, S.S</td>
                        <td>GURU</td>
                        <td>BAHASA INGGRIS</td>
                        <td>081333117789</td>
                    </tr>
                    <tr>
                        <!--                    <td>8</td>-->
                        <td>H. MUKODI, S.HI</td>
                        <td>GURU</td>
                        <td>NAHWU</td>
                        <td>085257317111</td>
                    </tr>
                    <tr>
                        <!--                    <td>9</td>-->
                        <td>SITI SHOLEHAH, S.Pd</td>
                        <td>GURU</td>
                        <td>BAHASA INDONESIA</td>
                        <td>082332585412</td>
                    </tr>
                    <tr>
                        <!--                    <td>10</td>-->
                        <td>MUHAMMAD SALEH, S.Kom</td>
                        <td>GURU</td>
                        <td>TIK</td>
                        <td>085646700078</td>
                    </tr>
                    <tr>
                        <!--                    <td>11</td>-->
                        <td>M. SYAHRI, S.Pd.I</td>
                        <td>GURU / WALI KELAS XII. IAI. 2. PUTRI</td>
                        <td>ILMU TAFSIR</td>
                        <td>085330150812</td>
                    </tr>
                    <tr>
                        <!--                    <td>12</td>-->
                        <td>BADRUS SALEH HASAN, S.Kom</td>
                        <td>GURU</td>
                        <td>TIK</td>
                        <td>085230519078</td>
                    </tr>
                    <tr>
                        <!--                    <td>13</td>-->
                        <td>ANINATUL BAIDIYAH, S.TP</td>
                        <td>GURU</td>
                        <td>BIOLOGI</td>
                        <td>085233075078</td>
                    </tr>
                    <tr>
                        <!--                    <td>14</td>-->
                        <td>MOH. IDIL MULTZAM, S.Pd.I</td>
                        <td>GURU</td>
                        <td>AKIDA AKHLAQ</td>
                        <td>085259111559</td>
                    </tr>
                    <tr>
                        <!--                    <td>15</td>-->
                        <td>WINANTO, S.Pd</td>
                        <td>GURU</td>
                        <td>PPKn & SEJARAH</td>
                        <td>085230519960</td>
                    </tr>
                    <tr>
                        <!--                    <td>16</td>-->
                        <td>BAMBANG SUMARYONO, ST</td>
                        <td>GURU</td>
                        <td>KIMIA</td>
                        <td>081335511405 / 085646840738</td>
                    </tr>
                    <tr>
                        <!--                    <td>17</td>-->
                        <td>FAIZAL KHAIRY APRILIANTO, S.Pd</td>
                        <td>GURU</td>
                        <td>GEOGRAFI</td>
                        <td>085749333527</td>
                    </tr>
                    <tr>
                        <!--                    <td>18</td>-->
                        <td>GATOT HERIYANTO, S.Pd.I</td>
                        <td>GURU</td>
                        <td>AL QUR’AN HADIST</td>
                        <td>085236755355</td>
                    </tr>
                    <tr>
                        <!--                    <td>19</td>-->
                        <td>YANTO, M.Si</td>
                        <td>GURU</td>
                        <td>PPKn & SOSIOLOGI</td>
                        <td>085330207559</td>
                    </tr>
                    <tr>
                        <!--                    <td>20</td>-->
                        <td>ROBIATUL ADAWIYAH, S.Si</td>
                        <td>GURU</td>
                        <td>MATEMATIKA</td>
                        <td>082330712412</td>
                    </tr>
                    <tr>
                        <!--                    <td>21</td>-->
                        <td>MULYADI, S.Pd</td>
                        <td>GURU</td>
                        <td>MATEMATIKA</td>
                        <td>085233340678 / 085288003243</td>
                    </tr>
                    <tr>
                        <!--                    <td>22</td>-->
                        <td>MOHAMMAD JAMALUL LAIL, S.Pd</td>
                        <td>GURU</td>
                        <td>FISIKA</td>
                        <td>085733500155 / 082331103145</td>
                    </tr>
                    <tr>
                        <!--                    <td>23</td>-->
                        <td>AHMAD TAUFIQ, S.Ag</td>
                        <td>GURU & WAKA HUMAS</td>
                        <td>FIQIH</td>
                        <td>085258740225</td>
                    </tr>
                    <tr>
                        <!--                    <td>24</td>-->
                        <td>LINDA ANGGRAINI, S.PdI</td>
                        <td>GURU</td>
                        <td>MULOK</td>
                        <td>081331512714</td>
                    </tr>
                    <tr>
                        <!--                    <td>25</td>-->
                        <td>ACHMAD BAKIR BASUNI,SH</td>
                        <td>GURU</td>
                        <td>BAHASA INGGRIS</td>
                        <td></td>
                    </tr>
                    <tr>
                        <!--                    <td>26</td>-->
                        <td>ABD. ROHIM, Lc</td>
                        <td>GURU</td>
                        <td>BAHASA ARAB</td>
                        <td>082334256131</td>
                    </tr>
                    <tr>
                        <!--                    <td>27</td>-->
                        <td>AYU MALINDA BULQIS, S.HI</td>
                        <td>GURU</td>
                        <td>TAUHID</td>
                        <td>082338403299 / 085645797590</td>
                    </tr>
                    <tr>
                        <!--                    <td>28</td>-->
                        <td>MUKHLAS KHOLIL, S.HI</td>
                        <td>GURU</td>
                        <td>BAHASA ARAB</td>
                        <td>085236868414</td>
                    </tr>
                    <tr>
                        <!--                    <td>29</td>-->
                        <td>AGUS SURAHMAN, S.Si</td>
                        <td>GURU</td>
                        <td>KIMIA & SEJARAH</td>
                        <td>085731259039</td>
                    </tr>
                    <tr>
                        <!--                    <td>30</td>-->
                        <td>MARIYATUL KIPTIYAH, S.Ag</td>
                        <td>GURU</td>
                        <td>FIQIH</td>
                        <td>085258418556</td>
                    </tr>
                    <tr>
                        <!--                    <td>31</td>-->
                        <td>MUHAMMAD MUKHLAS, S.Pd</td>
                        <td>GURU</td>
                        <td>FISIKA</td>
                        <td>085655955455</td>
                    </tr>
                    <tr>
                        <!--                    <td>32</td>-->
                        <td>SAIFULLAH, S.Pd</td>
                        <td>GURU</td>
                        <td>EKONOMI</td>
                        <td>082336400799</td>
                    </tr>
                    <tr>
                        <!--                    <td>33</td>-->
                        <td>BAMBANG DWI MULYADI, S.Pd</td>
                        <td>GURU</td>
                        <td>BAHASA INGGRIS</td>
                        <td>081336033053</td>
                    </tr>
                    <tr>
                        <!--                    <td>34</td>-->
                        <td>MOHAMMAD HENDRA, M.PdI</td>
                        <td>GURU</td>
                        <td>SKI & AL QUR’AN HADIST</td>
                        <td>081333611100</td>
                    </tr>
                    <tr>
                        <!--                    <td>35</td>-->
                        <td>NUCKY LESTARINI, S.Pd</td>
                        <td>GURU</td>
                        <td>BAHASA INDONESIA</td>
                        <td>085236928125</td>
                    </tr>
                    <tr>
                        <!--                    <td>36</td>-->
                        <td>WASILATUR ROHIM, S.Pd</td>
                        <td>GURU</td>
                        <td>BAHASA INGGRIS</td>
                        <td>082233665880</td>
                    </tr>
                    <tr>
                        <!--                    <td>37</td>-->
                        <td>RIATININGSIH, S.Pd</td>
                        <td>GURU</td>
                        <td>BIOLOGI</td>
                        <td>082330230711</td>
                    </tr>
                    <tr>
                        <!--                    <td>38</td>-->
                        <td>DWI RESTIANA WIDYANINGSIH, S.Pd</td>
                        <td>GURU</td>
                        <td>MATEMATIKA</td>
                        <td></td>
                    </tr>
                    <tr>
                        <!--                    <td>39</td>-->
                        <td>MISYATI, S.Pd</td>
                        <td>GURU</td>
                        <td>BAHASA INDONESIA</td>
                        <td>085236618710</td>
                    </tr>
                    <tr>
                        <!--                    <td>40</td>-->
                        <td>SITI BAHRIA, S.PdI</td>
                        <td>GURU</td>
                        <td>TAUHID</td>
                        <td>082335524014</td>
                    </tr>
                    <tr>
                        <!--                    <td>41</td>-->
                        <td>IRA DANIATI, S.Pd</td>
                        <td>GURU</td>
                        <td>GEOGRAFI</td>
                        <td>085258740329</td>
                    </tr>
                    <tr>
                        <!--                    <td>42</td>-->
                        <td>IZUDIN, S.PdI</td>
                        <td>GURU</td>
                        <td>AL QUR’AN HADIST</td>
                        <td>085290044258</td>
                    </tr>
                    <tr>
                        <!--                    <td>43</td>-->
                        <td>AHMAD JUWAINI M, S.Ag</td>
                        <td>GURU / BENDAHARA</td>
                        <td>PKn</td>
                        <td>081332220999 / 085335118999</td>
                    </tr>
                    <tr>
                        <!--                    <td>44</td>-->
                        <td>ZAENIH, SHI</td>
                        <td>GURU / WAKA KESISWAAN</td>
                        <td>AQIDAH AKHLAQ</td>
                        <td>085230253951</td>
                    </tr>
                    <tr>
                        <!--                    <td>45</td>-->
                        <td>HERAWATI, S.Pd</td>
                        <td>GURU</td>
                        <td>EKONOMI</td>
                        <td>082325589943</td>
                    </tr>
                    <tr>
                        <!--                    <td>46</td>-->
                        <td>REALIS KRISWATI, S.Pd</td>
                        <td>GURU</td>
                        <td>BAHASA INDONESIA</td>
                        <td>081334311868</td>
                    </tr>
                    <tr>
                        <!--                    <td>47</td>-->
                        <td>FAKHRUR RAZY, S.HI</td>
                        <td>GURU & KEPALA TAHQIQ</td>
                        <td>NAHWU</td>
                        <td>085335970555 / 0816563626</td>
                    </tr>
                    <tr>
                        <!--                    <td>48</td>-->
                        <td>ALI MUNIR MUSTAKHFIRIN, S.HI</td>
                        <td>GURU</td>
                        <td>FIQIH SYARI-AH</td>
                        <td>085214700921</td>
                    </tr>
                    <tr>
                        <!--                    <td>49</td>-->
                        <td>IKA ARIFAH, S.Pd</td>
                        <td>GURU</td>
                        <td>MATEMATIKA</td>
                        <td>085258999827</td>
                    </tr>
                    <tr>
                        <!--                    <td>50</td>-->
                        <td>MOH. ZARKASYI, S.PdI</td>
                        <td>GURU</td>
                        <td>ILMU HADIST</td>
                        <td>085235592093</td>
                    </tr>
                    <tr>
                        <!--                    <td>51</td>-->
                        <td>AHMAD MUHIBBUL FIRDAUS, S.PdI</td>
                        <td>GURU / KEPALA PRODISTIK</td>
                        <td>BAHASA ARAB</td>
                        <td>085234556820</td>
                    </tr>
                    <tr>
                        <!--                    <td>52</td>-->
                        <td>MAISUROH, S.PdI</td>
                        <td>GURU</td>
                        <td>SEJARAH KEBUDAYAAN ISLAM</td>
                        <td>085230506087</td>
                    </tr>
                    <tr>
                        <!--                    <td>53</td>-->
                        <td>ABDILLAH LUTHFI, S.Th.I</td>
                        <td>GURU</td>
                        <td>AL QUR’AN HADIST</td>
                        <td>081234504234</td>
                    </tr>
                    <tr>
                        <!--                    <td>54</td>-->
                        <td>BAROKATUL LAILI, S.HI</td>
                        <td>GURU</td>
                        <td>MULOK</td>
                        <td>085204854304</td>
                    </tr>
                    <tr>
                        <!--                    <td>55</td>-->
                        <td>ACH. NOOR BUSTHOMI, M.Si</td>
                        <td>GURU</td>
                        <td>SOSIOLOGI</td>
                        <td>085330838337</td>
                    </tr>
                    <tr>
                        <!--                    <td>56</td>-->
                        <td>SUMARYONO, M.PdI</td>
                        <td>GURU</td>
                        <td>TIK</td>
                        <td>085204891113</td>
                    </tr>
                    <tr>
                        <!--                    <td>57</td>-->
                        <td>MUHAMMAD HABIBI</td>
                        <td>GURU</td>
                        <td>HADIST</td>
                        <td>085258840702</td>
                    </tr>
                    <tr>
                        <!--                    <td>58</td>-->
                        <td>MOH. JUMA’IN, S.HI</td>
                        <td>GURU</td>
                        <td>AL QUR’AN</td>
                        <td>085234931357</td>
                    </tr>
                    <tr>
                        <!--                    <td>59</td>-->
                        <td>AHMAD SYAFI’I, SE</td>
                        <td>GURU</td>
                        <td></td>
                        <td>081646889885</td>
                    </tr>
                    <tr>
                        <!--                    <td>60</td>-->
                        <td>AL-MUHARROM</td>
                        <td>GURU</td>
                        <td></td>
                        <td>082233315546</td>
                    </tr>
                    <tr>
                        <!--                    <td>61</td>-->
                        <td>ACHMAD SYA’DULLAH, S.Pd</td>
                        <td>GURU BK</td>
                        <td>BK</td>
                        <td>085649655934 / 0811334655</td>
                    </tr>
                    <tr>
                        <!--                    <td>62</td>-->
                        <td>MUHAMMAD GULUH, S.PdI</td>
                        <td>KARYAWAN / TOLMAN MADRASAH</td>
                        <td></td>
                        <td>085235583454</td>
                    </tr>
                    <tr>
                        <!--                    <td>63</td>-->
                        <td>DIDIK SUPRIYANTO, SH</td>
                        <td>STAF. KESISWAAN</td>
                        <td></td>
                        <td>08113589113</td>
                    </tr>
                    <tr>
                        <!--                    <td>64</td>-->
                        <td>MOH. SU’UDI, S.PdI</td>
                        <td>KEPALA TU</td>
                        <td></td>
                        <td>08113589127</td>
                    </tr>
                    <tr>
                        <!--                    <td>65</td>-->
                        <td>AMARIS SUBIANTORO, S.PdI</td>
                        <td>STAF PERPUSTAKAAN MADRASAH</td>
                        <td></td>
                        <td>08113589124</td>
                    </tr>
                    <tr>
                        <!--                    <td>66</td>-->
                        <td>M. ZAINUL ARIFIN, S.Pd</td>
                        <td>STAF. KURIKULUM</td>
                        <td></td>
                        <td>085236755335</td>
                    </tr>
                    <tr>
                        <!--                    <td>67</td>-->
                        <td>AHMAD SUHAEMI, SH</td>
                        <td>STAF. KEUANGAN</td>
                        <td></td>
                        <td>085232323349 / 0811323252</td>
                    </tr>
                    <tr>
                        <!--                    <td>68</td>-->
                        <td>CANDRA USEH, S.PdI/td>
                        <td>KARYAWAN</td>
                        <td></td>
                        <td>085258740227</td>
                    </tr>
                    <tr>
                        <!--                    <td>69</td>-->
                        <td>LILIK ATUS SHOLEHA, S.Pd.I</td>
                        <td>STAF KESISWAAN</td>
                        <td></td>
                        <td>081235233222</td>
                    </tr>
                    <tr>
                        <!--                    <td>70</td>-->
                        <td>SUSILAWATI, S.PdI</td>
                        <td>KARYAWAN</td>
                        <td></td>
                        <td>085258949428</td>
                    </tr>
                    <tr>
                        <!--                    <td>71</td>-->
                        <td>NUR FITRIYAH. S.PdI</td>
                        <td>STAF KEUANGAN</td>
                        <td></td>
                        <td>085233049987</td>
                    </tr>
                    <tr>
                        <!--                    <td>72</td>-->
                        <td>SITI WALIDA</td>
                        <td>KARYAWAN</td>
                        <td></td>
                        <td>082234306021</td>
                    </tr>
                    <tr>
                        <!--                    <td>73</td>-->
                        <td>IRFANI KHOIRIYAH</td>
                        <td>KARYAWAN</td>
                        <td></td>
                        <td>082310907641</td>
                    </tr>
                    <tr>
                        <!--                    <td>74</td>-->
                        <td>MUHAMMAD DANIEL AINUL ISLAM</td>
                        <td>KARYAWAN</td>
                        <td></td>
                        <td>082325588569</td>
                    </tr>
                    <tr>
                        <!--                    <td>75</td>-->
                        <td>RIFA‘I</td>
                        <td>KARYAWAN</td>
                        <td></td>
                        <td>082334807688</td>
                    </tr>
                    <tr>
                        <!--                    <td>76</td>-->
                        <td>IQBAL ZAKARIYAH</td>
                        <td>INSTRUKTUR PRODISTIK</td>
                        <td>PEMROGRAMAN WEB DAN JARINGAN KOMPUTER</td>
                        <td>085258619348</td>
                    </tr>
                    <tr>
                        <!--                    <td>77</td>-->
                        <td>MISDIYANTO</td>
                        <td>GURU PRODISTIK</td>
                        <td>PEMROGRAMAN WEB DAN JARINGAN KOMPUTER</td>
                        <td>082334869496</td>
                    </tr>
                    <tr>
                        <!--                    <td>78</td>-->
                        <td>SANIRI, S.Kom</td>
                        <td>GURU PRODISTIK</td>
                        <td>TIK</td>
                        <td>085130335670</td>
                    </tr>
                    <tr>
                        <!--                    <td>79</td>-->
                        <td>ROFIQOH HANDAYANI</td>
                        <td>GURU PRODISTIK</td>
                        <td>TIK</td>
                        <td>085258523739 / 085336141514</td>
                    </tr>
                    <tr>
                        <!--                    <td>80</td>-->
                        <td>TAUFIQ QURROHMAN</td>
                        <td>GURU PRODISTIK</td>
                        <td>TIK</td>
                        <td>085234640755</td>
                    </tr>
                    <tr>
                        <!--                    <td>81</td>-->
                        <td>SYADIDATUL FAHMIAH</td>
                        <td>GURU PRODISTIK</td>
                        <td>ROBOTIKA</td>
                        <td>085745771134</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.4/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#sp').DataTable({
                responsive: true
            });
            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
@endsection
